<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Roda as migrations antes de cada teste.
     * Garante que o banco de dados está com as tabelas corretas.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }
}
