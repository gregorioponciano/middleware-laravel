<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel 10">
  <img src="https://img.shields.io/badge/PHP-8.1-777BB4?style=for-the-badge&logo=php" alt="PHP 8.1">
  <img src="https://img.shields.io/badge/Security-Shield-green?style=for-the-badge" alt="Security">
</p>

<h1 align="center">🛡️ Laravel Middleware Guide</h1>

<p align="center">
  <strong>Exemplos práticos e implementações de Middlewares para filtragem, segurança e manipulação de requisições no Laravel.</strong>
</p>

---

## 📝 Sobre o Projeto

Este repositório é um guia técnico focado no funcionamento dos **Middlewares** no ecossistema Laravel. O objetivo é demonstrar como criar camadas de inspeção entre a requisição do usuário e a resposta da aplicação.

### 🔍 O que são Middlewares?
Middlewares funcionam como um "filtro" ou "porteiro" para as suas rotas. Eles verificam condições (como autenticação, nível de acesso ou logs) antes que a lógica principal do seu Controller seja executada.

---

## 🚀 Exemplos Implementados

Neste repositório, você encontrará implementações para:

1. **Autenticação e Autorização:** Verificar se o usuário está logado ou se possui o cargo (role) necessário (ex: `CheckAdmin`).
2. **Sanitização de Dados:** Manipulação de entradas antes de chegarem ao banco de dados.
3. **Logs de Acesso:** Registro de IP e horário de acesso a rotas específicas.
4. **Localização (I18n):** Definição automática de idioma baseada no cabeçalho da requisição.
5. **CORS e Headers:** Adição de cabeçalhos de segurança (Security Headers).

---

## 💻 Como Criar um Middleware

Comando base utilizado para gerar novos middlewares neste projeto:

```bash
php artisan make:middleware CheckAge
