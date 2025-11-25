<?php

namespace Tests\Unit;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use App\Policies\CommentPolicy;
use Tests\TestCase;

class CommentPolicyTest extends TestCase
{
    /**
     * Teste: proprietário do comentário pode editar
     */
    public function teste_dono_pode_editar_comentario(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $user->id,
            'idea_id' => $idea->id,
        ]);

        $policy = new CommentPolicy();
        $this->assertTrue($policy->update($user, $comment));
    }

    /**
     * Teste: outro usuário NÃO pode editar comentário alheio
     */
    public function teste_nao_dono_nao_pode_editar_comentario(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $idea = Idea::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $owner->id,
            'idea_id' => $idea->id,
        ]);

        $policy = new CommentPolicy();
        $this->assertFalse($policy->update($otherUser, $comment));
    }

    /**
     * Teste: dono do comentário pode deletar
     */
    public function teste_dono_pode_deletar_comentario(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $user->id,
            'idea_id' => $idea->id,
        ]);

        $policy = new CommentPolicy();
        $this->assertTrue($policy->delete($user, $comment));
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

        $policy = new CommentPolicy();
        $this->assertTrue($policy->delete($ideaOwner, $comment));
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

        $policy = new CommentPolicy();
        $this->assertFalse($policy->delete($randomUser, $comment));
    }
}
