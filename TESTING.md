# 🧪 Guia de Testes - ideaForge

## O que é um Factory?

Um **Factory** é uma classe que cria dados "fake" (fictícios) para testes. Em vez de criar usuários, ideias e comentários manualmente no BD durante testes, o Factory faz isso automaticamente.

### Exemplo prático:
```php
// Sem Factory (manual, tedioso):
$user = new User();
$user->name = 'João';
$user->email = 'joao@example.com';
$user->password = bcrypt('123456');
$user->save();

// Com Factory (automático, limpo):
$user = User::factory()->create();
```

Os Factories usam a biblioteca **Faker** (que gera dados realistas: nomes, emails, datas, etc).

---

## Erros que você viu

### ❌ `no such table: users` (QueryException)
**Causa:** Migrations não rodaram no banco de testes.
**Solução:** Criar arquivo `.env.testing` com banco SQLite em memória.

### ❌ `Class "Database\Factories\IdeaFactory" not found`
**Causa:** Os Factories `IdeaFactory`, `CommentFactory`, `TagFactory` não existem.
**Solução:** Criamos para você (veja abaixo).

### ❌ `Call to undefined method App\Models\Tag::factory()`
**Causa:** `Tag` não tem Factory; `Tag::factory()` não existe.
**Solução:** Criar `TagFactory`.

---

## Configuração Rápida

### 1️⃣ Criar `.env.testing`
```bash
cp .env .env.testing
# Editar .env.testing e mudar:
DB_CONNECTION=sqlite
DB_DATABASE=:memory:
```

### 2️⃣ Rodar migrations automaticamente (opcional)
Editar `tests/TestCase.php` para rodar migrations antes de cada teste:
```php
protected function setUp(): void
{
    parent::setUp();
    $this->artisan('migrate'); // Roda migrations automaticamente
}
```

### 3️⃣ Instalar Factories (já feito para você!)
Copiamos `IdeaFactory`, `CommentFactory`, `TagFactory` para `database/factories/`.

---

## Como Rodar Testes

### Rodar todos os testes:
```bash
php artisan test
```

### Rodar apenas um arquivo de testes:
```bash
php artisan test tests/Unit/IdeaPolicyTest.php
php artisan test tests/Feature/IdeaControllerTest.php
```

### Rodar apenas um teste específico:
```bash
php artisan test --filter="idea owner can update idea"
```

### Rodar com output detalhado:
```bash
php artisan test --verbose
```

### Rodar com cobertura de código (qual % do código está coberto):
```bash
php artisan test --coverage
```

---

## Entendendo os Testes

### 🧮 Testes Unitários (Unit Tests)
Testam **uma única coisa** isolada, sem banco de dados.

**Arquivo:** `tests/Unit/IdeaPolicyTest.php`
**O que testa:** Regras de autorização (Policies)

```php
public function test_idea_owner_can_update_idea()
{
    $owner = User::factory()->create();
    $idea = Idea::factory()->create(['user_id' => $owner->id]);
    
    // Testa se o proprietário pode atualizar
    $this->assertTrue((new IdeaPolicy)->update($owner, $idea));
}
```

**Por que não usa banco real?** Porque Policies são regras simples: "se user_id = idea.user_id, pode atualizar".

---

### 🌐 Testes de Feature (Feature Tests)
Testam **fluxos HTTP completos**: autenticação → requisição → resposta.

**Arquivo:** `tests/Feature/IdeaControllerTest.php`
**O que testa:** Controllers, rotas, validações, autorizações

```php
public function test_authenticated_user_can_create_idea()
{
    $user = User::factory()->create();
    
    // Simula um POST autenticado
    $response = $this->actingAs($user)->post('/ideas', [
        'title' => 'Minha ideia',
        'description' => 'Descrição',
        'tag_id' => Tag::factory()->create()->id,
    ]);
    
    // Verifica se a ideia foi criada no BD
    $this->assertDatabaseHas('ideas', ['title' => 'Minha ideia']);
    // Verifica se redirecionou (sucesso)
    $response->assertRedirect('/ideas');
}
```

---

## Estrutura de Testes

```
tests/
├── Unit/                          # Testes unitários (sem HTTP)
│   ├── IdeaPolicyTest.php        # 5 testes de autorização
│   └── CommentPolicyTest.php     # 5 testes de moderação
│
└── Feature/                       # Testes de fluxo HTTP
    ├── IdeaControllerTest.php    # 10 testes de CRUD de ideias
    └── CommentControllerTest.php # 8 testes de comentários
```

---

## Assertions Comuns

### ✅ Verificar banco de dados
```php
$this->assertDatabaseHas('ideas', ['title' => 'Minha ideia']);
$this->assertDatabaseMissing('ideas', ['title' => 'Deletada']);
```

### ✅ Verificar status HTTP
```php
$response->assertStatus(200);      // Sucesso
$response->assertForbidden();      // 403 (não autorizado)
$response->assertUnauthorized();   // 401 (não autenticado)
$response->assertNotFound();       // 404 (não existe)
```

### ✅ Verificar redirecionamento
```php
$response->assertRedirect('/ideas');
```

### ✅ Verificar erros de validação
```php
$response->assertSessionHasErrors(['title']); // Campo 'title' tem erro
```

### ✅ Verificar valor de retorno
```php
$this->assertTrue($result);
$this->assertFalse($result);
$this->assertEquals($expected, $actual);
```

---

## O que o `RefreshDatabase` faz?

Cada teste que usa `use RefreshDatabase` começa com um banco **limpo**:
1. Roda as migrations
2. Executa o teste
3. **Apaga tudo** (rollback)
4. Próximo teste começa do zero

Isso garante que um teste não interfira no outro.

---

## Próximos Passos

1. ✅ **Criar `.env.testing`** com SQLite em memória
2. ✅ **Criar Factories** (IdeaFactory, CommentFactory, TagFactory)
3. ✅ **Rodar `php artisan test`** e verificar se tudo passa
4. 📋 **Opcional:** Criar FormRequests (IdeaRequest, CommentRequest)
5. 🐳 **Opcional:** Docker setup

---

## Dúvidas?

- **"Por que meu teste falha?"** → Rode com `--verbose` para ver detalhes
- **"Como debuggar?"** → Use `dd($variable)` ou `\Log::info(...)`
- **"Preciso de dados reais?"** → Use Seeders, não Factories
- **"Posso testar comandos Artisan?"** → Sim! `$this->artisan('migrate')`

