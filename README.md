# 🔐 Laravel Fortify Auth System

Este projeto é um sistema de autenticação completo desenvolvido com **Laravel** e o pacote **Laravel Fortify**, utilizando o frontend com **Blade** e **Tailwind CSS**.

O objetivo principal é implementar uma autenticação segura, moderna e configurável, com suporte a verificação de e-mail, redefinição de senha e autenticação em dois fatores (2FA).

---

## 🚀 Funcionalidades

- 📝 Registro de usuário
- 🔐 Login com validação
- 🔁 Logout
- 📧 Verificação de e-mail
- 🔒 Autenticação em dois fatores (2FA)
- 🔁 Redefinição de senha via e-mail
- 🧑 Atualização de perfil e senha
- ✅ Proteção com confirmação de senha em ações sensíveis

---

## 🧰 Tecnologias utilizadas

- Laravel 11/12
- Laravel Fortify
- Blade (template engine)
- Tailwind CSS
- PHP 8.x
- MySQL
- Composer / NPM

---

## 📁 Estrutura de Views Personalizadas

As rotas do Fortify foram personalizadas para usar views próprias:

- `login` → `resources/views/auth/login.blade.php`
- `register` → `resources/views/auth/register.blade.php`
- `forgot-password` → `resources/views/auth/forgot-password.blade.php`
- `reset-password` → `resources/views/auth/reset-password.blade.php`

---

## ⚙️ Como rodar o projeto localmente

```bash
# Clone o repositório
git clone https://github.com/SEU-USUARIO/seu-repositorio.git

# Acesse a pasta
cd nome-do-projeto

# Instale as dependências
composer install

# Instale os assets do frontend
npm install && npm run dev

# Configure o banco de dados no .env
# Ex: DB_DATABASE, DB_USERNAME, DB_PASSWORD

# Dentro de database -> seeders -> DatabaseSeeder.php
# Você pode criar o seu usuário ou seguir o fluxo normal de criação de usuário

# Rode as migrations
php artisan migrate

# Inicie o servidor
php artisan serve
Acesse em: http://localhost:8000