# 🚀 Idea Forge

**Plataforma Colaborativa de Criação, Discussão e Evolução de Ideias**

---

## 💡 Sobre o Projeto

O **Idea Forge** é uma plataforma social e colaborativa criada para reunir pessoas em torno da **criação, discussão e evolução de ideias**.

Seu propósito é simples: permitir que qualquer pessoa compartilhe uma ideia e receba **feedback construtivo** da comunidade, transformando conceitos iniciais em projetos mais sólidos e bem estruturados. Uma única frase pode se tornar o início de um grande projeto.

## 🎯 Objetivos Principais

O Idea Forge nasceu com o propósito de criar um ambiente onde ideias possam:

*   Ser publicadas de maneira rápida e simples.
*   Receber feedback da comunidade.
*   Evoluir conforme discussões e interações.
*   Registrar sugestões técnicas (linguagens, frameworks, métodos, etc.).
*   Possuir histórico e acompanhamento de evolução.

A plataforma funciona como um ponto de partida para projetos, combinando colaboração social com potencial de automação via Inteligência Artificial.

## 🏗️ Funcionalidades Implementadas

O projeto já possui uma base sólida construída com **Laravel 11+**, garantindo um *backend* robusto e seguro.

### 🔒 Autenticação (Laravel Breeze)

*   Login e Registro de usuários.
*   Logout e proteção de rotas.
*   Sessões seguras e padrões modernos de autenticação.

### 📝 CRUD Completo de Ideias

Os usuários autenticados podem gerenciar suas ideias:

*   Criar, Editar e Excluir ideias.
*   Listar e Visualizar detalhes de cada ideia.
*   Cada ideia pertence a um usuário, garantindo autoria clara e organização.

### 🏷️ Sistema de Tags

*   Uma ideia pode ter várias tags.
*   Tags ajudam na classificação e descoberta de temas.
*   Relacionamento *many-to-many* totalmente funcional.

## 💬 Funcionalidades Sociais Planejadas

Para transformar o Idea Forge em uma plataforma realmente colaborativa e dinâmica, estão planejadas funcionalidades sociais robustas:

*   **Comentários:** Discussões abertas dentro de cada ideia para feedback direto.
*   **Likes e Dislikes:** Avaliação rápida da comunidade para ranqueamento e destaque de ideias promissoras.
*   **Sugestões Técnicas nos Comentários:** O ponto social mais importante, permitindo contribuições construtivas como: "Acho que esse projeto ficaria melhor em Python" ou "Considere usar arquitetura de microserviços."

## 🤖 Futuro: Integração com Inteligência Artificial

Um dos pilares mais ambiciosos do projeto é incorporar IA para dar suporte à evolução das ideias. A IA poderá auxiliar de várias formas:

| Área de Aplicação | Funcionalidades |
| :--- | :--- |
| **Opiniões Automáticas** | Pontos fortes e fracos, sugestões de tecnologias, dificuldades e riscos. |
| **Análise de Comentários** | Síntese da discussão, destaque dos pontos mais citados e facilitação da leitura rápida. |
| **Geração de Ideias Relacionadas** | Extensões naturais, variações criativas e novos caminhos a partir da ideia original. |
| **Planejamento Automático** | Transformar uma ideia em algo concreto: estrutura inicial, tecnologias recomendadas, etapas sugeridas e *roadmap* organizado. |

## 🛠️ Stack Tecnológica

| Categoria | Tecnologia | Observação |
| :--- | :--- | :--- |
| **Core** | Laravel 11+ | Framework PHP principal. |
| **Autenticação** | Laravel Breeze | Pacote de *scaffolding* de autenticação. |
| **Frontend** | Blade / Tailwind CSS | Interface atual (se utilizado). |
| **Banco de Dados** | MySQL ou PostgreSQL | Persistência de dados. |
| **Admin (Planejado)** | Filament | Painel administrativo futuro. |
| **IA (Planejado)** | OpenAI / LLMs | Integração para funcionalidades inteligentes. |

## 🚀 Como Rodar o Projeto Localmente

Siga os passos abaixo para configurar e executar o Idea Forge em seu ambiente local:

1.  **Instalar dependências:**
    ```bash
    composer install
    ```

2.  **Configurar ambiente:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Certifique-se de configurar as credenciais do banco de dados no arquivo `.env`.*

3.  **Criar banco de dados e rodar migrations:**
    ```bash
    php artisan migrate --seed
    ```

4.  **Iniciar o servidor:**
    ```bash
    php artisan serve
    ```

O projeto estará acessível em `http://127.0.0.1:8000` (ou porta similar).

## 📜 Licença

Este projeto está licenciado sob a **[Licença](LICENSE)**. Consulte o arquivo `LICENSE` para mais detalhes.