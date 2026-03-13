## Sistema de Gestão de Consultório

Sistema web desenvolvido para gerenciamento de um consultório médico, permitindo organizar pacientes, consultas e fluxo de atendimento de forma simples e eficiente.  
O objetivo do projeto é demonstrar conhecimentos em desenvolvimento fullstack, arquitetura de aplicações web e criação de APIs REST.

> Projeto em desenvolvimento, funcionalidades futuras abaixo:

#### Funcionalidades

- Cadastro e gerenciamento de pacientes
- Agendamento de consultas
- Edição de informações de pacientes
- Cancelamento ou exclusão de consultas
- Listagem e consulta de registros
- Estrutura preparada para autenticação de usuários
- Organização de dados para facilitar o fluxo de atendimento

#### Tecnologias Utilizadas

- Backend
- PHP
- Laravel
- Eloquent ORM
- API REST
- Vue.js / Blade / JavaScript
- PostgreSql
- Insomnia / Postman para testes de API

#### Como executar o projeto
1. Clonar o repositório  
`git clone https://github.com/andressa-mb/Consultorio.git`
2. Entrar no diretório do projeto  
`cd Consultorio`
3. Instalar dependências  
`composer install`
4. Copiar o arquivo de exemplo:  
`cp .env.example .env`  
  Configurar as credenciais do banco de dados no .env.  
5. Gerar a chave da aplicação  
`php artisan key:generate`
6. Executar migrations  
`php artisan migrate`
7. Iniciar o servidor  
`php artisan serve`

#### A aplicação estará disponível em:
O backend estará disponível em:
```
http://localhost:8080
```
8. Rodar o servidor do frontend (Vue)  
  Em outro terminal execute:  
`npm run dev`  
  O Vite iniciará o servidor de desenvolvimento do frontend.
