<?php

namespace Tests\Feature;

use App\Models\Idea;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IdeaControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste: listar ideias (sem autenticação)
     */
    public function teste_listar_ideias_sem_autenticacao(): void
    {
        Idea::factory()->count(3)->create();

        $response = $this->get(route('ideas.index'));

        $response->assertStatus(200);
        $response->assertViewHas('ideas');
    }

    /**
     * Teste: usuário autenticado pode acessar form de criação
     */
    public function teste_usuario_autenticado_pode_acessar_formulario_criacao(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('ideas.create'));

        $response->assertStatus(200);
        $response->assertViewHas('tags');
    }

    /**
     * Teste: usuário autenticado pode criar ideia
     */
    public function teste_usuario_autenticado_pode_criar_ideia(): void
    {
        $user = User::factory()->create();
        $tag = Tag::factory()->create();

        $data = [
            'title' => 'Minha ideia genial',
            'description' => 'Esta é uma descrição bem detalhada da minha ideia.',
            'tag_id' => $tag->id,
        ];

        $response = $this->actingAs($user)
            ->post(route('ideas.store'), $data);

        $this->assertDatabaseHas('ideas', [
            'title' => 'Minha ideia genial',
            'user_id' => $user->id,
        ]);

        $response->assertRedirect(route('ideas.index'));
    }

    /**
     * Teste: usuário NÃO autenticado NÃO pode criar ideia
     */
    public function teste_usuario_nao_autenticado_nao_pode_criar_ideia(): void
    {
        $tag = Tag::factory()->create();

        $data = [
            'title' => 'Ideia não autorizada',
            'description' => 'Descrição',
            'tag_id' => $tag->id,
        ];

        $response = $this->post(route('ideas.store'), $data);

        $response->assertRedirect(route('login'));
    }

    /**
     * Teste: validação - title é obrigatório
     */
    public function teste_criar_ideia_requer_titulo(): void
    {
        $user = User::factory()->create();
        $tag = Tag::factory()->create();

        $data = [
            'description' => 'Descrição sem título',
            'tag_id' => $tag->id,
        ];

        $response = $this->actingAs($user)
            ->post(route('ideas.store'), $data);

        $response->assertSessionHasErrors('title');
    }

    /**
     * Teste: dono pode editar sua ideia
     */
    public function teste_dono_pode_editar_ideia(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $user->id]);
        $tag = Tag::factory()->create();

        $data = [
            'title' => 'Título atualizado',
            'description' => 'Descrição atualizada',
            'tag_id' => $tag->id,
        ];

        $response = $this->actingAs($user)
            ->patch(route('ideas.update', $idea), $data);

        $this->assertDatabaseHas('ideas', [
            'id' => $idea->id,
            'title' => 'Título atualizado',
        ]);

        $response->assertRedirect();
    }

    /**
     * Teste: usuário NÃO dono NÃO pode editar ideia
     */
    public function teste_nao_dono_nao_pode_editar_ideia(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $owner->id]);
        $tag = Tag::factory()->create();

        $data = [
            'title' => 'Título hackeado',
            'description' => 'Descrição hackeada',
            'tag_id' => $tag->id,
        ];

        $response = $this->actingAs($otherUser)
            ->patch(route('ideas.update', $idea), $data);

        $response->assertForbidden(); // 403
        $this->assertDatabaseMissing('ideas', [
            'id' => $idea->id,
            'title' => 'Título hackeado',
        ]);
    }

    /**
     * Teste: dono pode deletar sua ideia
     */
    public function teste_dono_pode_deletar_ideia(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)
            ->delete(route('ideas.destroy', $idea));

        $this->assertDatabaseMissing('ideas', ['id' => $idea->id]);
        $response->assertRedirect();
    }

    /**
     * Teste: usuário NÃO dono NÃO pode deletar ideia
     */
    public function teste_nao_dono_nao_pode_deletar_ideia(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $owner->id]);

        $response = $this->actingAs($otherUser)
            ->delete(route('ideas.destroy', $idea));

        $response->assertForbidden(); // 403
        $this->assertDatabaseHas('ideas', ['id' => $idea->id]);
    }

    /**
     * Teste: visualizar uma ideia específica
     */
    public function teste_pode_visualizar_detalhes_ideia(): void
    {
        $idea = Idea::factory()->create();

        $response = $this->get(route('ideas.show', $idea));

        $response->assertStatus(200);
        $response->assertViewHas('idea', $idea);
    }
}
