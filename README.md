# Contact Management System / Sistema de Gestão de Contactos

[🇵🇹 Português](#português) | [🇧🇷 Português Brasileiro](#português-brasileiro) | [🇺🇸 English](#english)

---

## 🇵🇹 Português

### Descrição do Projeto
Sistema de gestão de contactos desenvolvido em Laravel 10, que permite aos utilizadores autenticados gerir uma lista de contactos pessoais com funcionalidades CRUD completas.

### Funcionalidades Implementadas

#### 🔐 Autenticação
- Sistema de autenticação completo com Laravel UI
- Registo e login de utilizadores
- Proteção de rotas com middleware de autenticação
- Reset de palavra-passe

#### 👥 Gestão de Contactos
- **Listagem**: Visualização de todos os contactos
- **Criação**: Adicionar novos contactos com validação
- **Visualização**: Ver detalhes de um contacto específico
- **Edição**: Modificar dados de contactos existentes
- **Eliminação**: Remover contactos (soft delete)

#### 📋 Validação de Dados
- Nome: obrigatório, mínimo 6 caracteres
- Contacto: obrigatório, exatamente 9 dígitos, único
- Email: obrigatório, formato válido, único

#### 🗄️ Base de Dados
- Tabela `contacts` com campos:
  - `id` (chave primária)
  - `name` (nome)
  - `contact` (número de contacto)
  - `email` (endereço de email)
  - `created_at` e `updated_at` (timestamps)
  - `deleted_at` (soft delete)

### Estrutura Técnica

#### Tecnologias Utilizadas
- **Backend**: Laravel 10.x
- **Base de Dados**: MySQL/PostgreSQL
- **Frontend**: Blade templates com Bootstrap
- **Autenticação**: Laravel UI
- **Testes**: PHPUnit

#### Arquitetura
- **Model-View-Controller (MVC)**
- **Form Requests** para validação
- **Soft Deletes** para eliminação segura
- **Resource Routes** para operações CRUD

### Instalação e Configuração

1. **Clonar o repositório**
```bash
git clone [url-do-repositorio]
cd contact-management
```

2. **Instalar dependências**
```bash
composer install
npm install
```

3. **Configurar ambiente**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurar base de dados**
```bash
php artisan migrate
php artisan db:seed
```

5. **Executar servidor**
```bash
php artisan serve
```

### Testes
```bash
php artisan test
```

### Funcionalidades Futuras Planeadas

#### 🏗️ Camadas de Serviços
- Implementação de Service Layer para lógica de negócio
- Separação de responsabilidades entre controllers e serviços
- Melhoria da testabilidade do código

#### ⚡ Actions
- Implementação de Actions para operações específicas
- Redução da complexidade dos controllers
- Melhoria da reutilização de código

#### 🔍 Funcionalidades Adicionais
- Pesquisa e filtros avançados
- Paginação de resultados
- Exportação de dados (CSV, PDF)
- Importação em lote
- Categorização de contactos
- Histórico de alterações
- API REST para integração externa

---

## 🇧🇷 Português Brasileiro

### Descrição do Projeto
Sistema de gerenciamento de contatos desenvolvido em Laravel 10, que permite aos usuários autenticados gerenciar uma lista de contatos pessoais com funcionalidades CRUD completas.

### Funcionalidades Implementadas

#### 🔐 Autenticação
- Sistema de autenticação completo com Laravel UI
- Registro e login de usuários
- Proteção de rotas com middleware de autenticação
- Reset de senha

#### 👥 Gerenciamento de Contatos
- **Listagem**: Visualização de todos os contatos
- **Criação**: Adicionar novos contatos com validação
- **Visualização**: Ver detalhes de um contato específico
- **Edição**: Modificar dados de contatos existentes
- **Exclusão**: Remover contatos (soft delete)

#### 📋 Validação de Dados
- Nome: obrigatório, mínimo 6 caracteres
- Contato: obrigatório, exatamente 9 dígitos, único
- Email: obrigatório, formato válido, único

#### 🗄️ Banco de Dados
- Tabela `contacts` com campos:
  - `id` (chave primária)
  - `name` (nome)
  - `contact` (número de contato)
  - `email` (endereço de email)
  - `created_at` e `updated_at` (timestamps)
  - `deleted_at` (soft delete)

### Estrutura Técnica

#### Tecnologias Utilizadas
- **Backend**: Laravel 10.x
- **Banco de Dados**: MySQL/PostgreSQL
- **Frontend**: Blade templates com Bootstrap
- **Autenticação**: Laravel UI
- **Testes**: PHPUnit

#### Arquitetura
- **Model-View-Controller (MVC)**
- **Form Requests** para validação
- **Soft Deletes** para exclusão segura
- **Resource Routes** para operações CRUD

### Instalação e Configuração

1. **Clonar o repositório**
```bash
git clone [url-do-repositorio]
cd contact-management
```

2. **Instalar dependências**
```bash
composer install
npm install
```

3. **Configurar ambiente**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurar banco de dados**
```bash
php artisan migrate
php artisan db:seed
```

5. **Executar servidor**
```bash
php artisan serve
```

### Testes
```bash
php artisan test
```

### Funcionalidades Futuras Planejadas

#### 🏗️ Camadas de Serviços
- Implementação de Service Layer para lógica de negócio
- Separação de responsabilidades entre controllers e serviços
- Melhoria da testabilidade do código

#### ⚡ Actions
- Implementação de Actions para operações específicas
- Redução da complexidade dos controllers
- Melhoria da reutilização de código

#### 🔍 Funcionalidades Adicionais
- Pesquisa e filtros avançados
- Paginação de resultados
- Exportação de dados (CSV, PDF)
- Importação em lote
- Categorização de contatos
- Histórico de alterações
- API REST para integração externa

---

## 🇺🇸 English

### Project Description
Contact management system developed in Laravel 10, which allows authenticated users to manage a personal contacts list with complete CRUD functionality.

### Implemented Features

#### 🔐 Authentication
- Complete authentication system with Laravel UI
- User registration and login
- Route protection with authentication middleware
- Password reset

#### 👥 Contact Management
- **Listing**: View all contacts
- **Creation**: Add new contacts with validation
- **Viewing**: See details of a specific contact
- **Editing**: Modify existing contact data
- **Deletion**: Remove contacts (soft delete)

#### 📋 Data Validation
- Name: required, minimum 6 characters
- Contact: required, exactly 9 digits, unique
- Email: required, valid format, unique

#### 🗄️ Database
- `contacts` table with fields:
  - `id` (primary key)
  - `name` (name)
  - `contact` (contact number)
  - `email` (email address)
  - `created_at` and `updated_at` (timestamps)
  - `deleted_at` (soft delete)

### Technical Structure

#### Technologies Used
- **Backend**: Laravel 10.x
- **Database**: MySQL/PostgreSQL
- **Frontend**: Blade templates with Bootstrap
- **Authentication**: Laravel UI
- **Testing**: PHPUnit

#### Architecture
- **Model-View-Controller (MVC)**
- **Form Requests** for validation
- **Soft Deletes** for safe deletion
- **Resource Routes** for CRUD operations

### Installation and Setup

1. **Clone the repository**
```bash
git clone [repository-url]
cd contact-management
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Configure environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure database**
```bash
php artisan migrate
php artisan db:seed
```

5. **Run server**
```bash
php artisan serve
```

### Testing
```bash
php artisan test
```

### Planned Future Features

#### 🏗️ Service Layers
- Implementation of Service Layer for business logic
- Separation of responsibilities between controllers and services
- Improvement of code testability

#### ⚡ Actions
- Implementation of Actions for specific operations
- Reduction of controller complexity
- Improvement of code reusability

#### 🔍 Additional Features
- Advanced search and filters
- Results pagination
- Data export (CSV, PDF)
- Batch import
- Contact categorization
- Change history
- REST API for external integration

---

## 📝 License / Licença

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Este projeto é software de código aberto licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).