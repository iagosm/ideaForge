<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste: usuário autenticado pode comentar em uma ideia
     */
    public function teste_usuario_autenticado_pode_comentar_em_ideia(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create();

        $data = ['comment' => 'Este é um excelente comentário!'];

        $response = $this->actingAs($user)
            ->post(route('comments.store', $idea), $data);

        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'idea_id' => $idea->id,
            'content' => 'Este é um excelente comentário!',
        ]);

        $response->assertRedirect();
    }

    /**
     * Teste: usuário NÃO autenticado NÃO pode comentar
     */
    public function teste_usuario_nao_autenticado_nao_pode_comentar(): void
    {
        $idea = Idea::factory()->create();

        $data = ['comment' => 'Comentário não autorizado'];

        $response = $this->post(route('comments.store', $idea), $data);

        $response->assertRedirect(route('login'));
    }

    /**
     * Teste: comentário vazio é rejeitado
     */
    public function teste_comentario_nao_pode_estar_vazio(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create();

        $data = ['comment' => ''];

        $response = $this->actingAs($user)
            ->post(route('comments.store', $idea), $data);

        $response->assertSessionHasErrors('comment');
    }

    /**
     * Teste: dono do comentário pode editar
     */
    public function teste_dono_pode_editar_comentario(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $user->id,
            'idea_id' => $idea->id,
        ]);

        $data = ['content' => 'Comentário atualizado com novas informações'];

        $response = $this->actingAs($user)
            ->put(route('comments.update', $comment), $data);

        $this->assertDatabaseHas('comments', [
            'id' => $comment->id,
            'content' => 'Comentário atualizado com novas informações',
        ]);

        $response->assertRedirect();
    }

    /**
     * Teste: outro usuário NÃO pode editar comentário alheio
     */
    public function teste_outro_usuario_nao_pode_editar_comentario_alheio(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $idea = Idea::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $owner->id,
            'idea_id' => $idea->id,
        ]);

        $data = ['content' => 'Comentário hackeado'];

        $response = $this->actingAs($otherUser)
            ->put(route('comments.update', $comment), $data);

        $response->assertForbidden(); // 403
        $this->assertDatabaseMissing('comments', [
            'id' => $comment->id,
            'content' => 'Comentário hackeado',
        ]);
    }

    /**
     * Teste: dono pode deletar seu comentário
     */
    public function teste_dono_pode_deletar_comentario(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $user->id,
            'idea_id' => $idea->id,
        ]);

        $response = $this->actingAs($user)
            ->delete(route('comments.destroy', $comment));

        $this->assertDatabaseMissing('comments', ['id' => $comment->id]);
        $response->assertRedirect();
    }

    /**
     * Teste: dono da ideia pode deletar comentário alheio (moderation)
     */
    public function teste_dono_ideia_pode_deletar_comentario_alheio(): void
    {
        $ideaOwner = User::factory()->create();
        $commentOwner = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $ideaOwner->id]);
        $comment = Comment::factory()->create([
            'user_id' => $commentOwner->id,
            'idea_id' => $idea->id,
        ]);

        $response = $this->actingAs($ideaOwner)
            ->delete(route('comments.destroy', $comment));

        $this->assertDatabaseMissing('comments', ['id' => $comment->id]);
        $response->assertRedirect();
    }

    /**
     * Teste: usuário aleatório NÃO pode deletar comentário
     */
    public function teste_usuario_aleatorio_nao_pode_deletar_comentario(): void
    {
        $ideaOwner = User::factory()->create();
        $commentOwner = User::factory()->create();
        $randomUser = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $ideaOwner->id]);
        $comment = Comment::factory()->create([
            'user_id' => $commentOwner->id,
            'idea_id' => $idea->id,
        ]);

        $response = $this->actingAs($randomUser)
            ->delete(route('comments.destroy', $comment));

        $response->assertForbidden(); // 403
        $this->assertDatabaseHas('comments', ['id' => $comment->id]);
    }
}
