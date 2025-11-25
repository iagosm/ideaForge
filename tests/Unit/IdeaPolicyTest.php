<?php

namespace Tests\Unit;

use App\Models\Idea;
use App\Models\User;
use App\Policies\IdeaPolicy;
use PHPUnit\Framework\TestCase;
use Tests\TestCase as LaravelTestCase;

class IdeaPolicyTest extends LaravelTestCase
{
    /**
     * Teste: usuário dono pode editar a ideia
     */
    public function test_dono_pode_editar_ideia(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $user->id]);

        $policy = new IdeaPolicy();
        $this->assertTrue($policy->update($user, $idea));
    }

    /**
     * Teste: usuário não dono NÃO pode editar
     */
    public function test_nao_dono_nao_pode_editar_ideia(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $owner->id]);

        $policy = new IdeaPolicy();
        $this->assertFalse($policy->update($otherUser, $idea));
    }

    /**
     * Teste: usuário dono pode deletar a ideia
     */
    public function test_dono_pode_deletar_ideia(): void
    {
        $user = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $user->id]);

        $policy = new IdeaPolicy();
        $this->assertTrue($policy->delete($user, $idea));
    }

    /**
     * Teste: usuário não dono NÃO pode deletar
     */
    public function test_nao_dono_nao_pode_deletar_ideia(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $idea = Idea::factory()->create(['user_id' => $owner->id]);

        $policy = new IdeaPolicy();
        $this->assertFalse($policy->delete($otherUser, $idea));
    }

    /**
     * Teste: qualquer usuário autenticado pode criar ideia
     */
    public function test_usuario_autenticado_pode_criar_ideia(): void
    {
        $user = User::factory()->create();

        $policy = new IdeaPolicy();
        $this->assertTrue($policy->create($user));
    }
}
