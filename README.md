# PHP MVC Starter

![Último commit](https://img.shields.io/github/last-commit/andregvg/php-mvc-starter?label=último%20commit)
![Tamanho do repositório](https://img.shields.io/github/repo-size/andregvg/php-mvc-starter)
![PHP](https://img.shields.io/badge/PHP-%5E8.0-blue)
![Code Quality](https://img.shields.io/badge/qualidade--do--código-A-brightgreen)
![Licença](https://img.shields.io/github/license/andregvg/php-mvc-starter)

Este repositório é um esqueleto (starter kit) para novos projetos pessoais PHP seguindo o padrão MVC, com organização moderna, suporte a variáveis de ambiente e uso do Composer.


## Estrutura de Diretórios

```bash
php-mvc-starter/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   ├── Core/
│   └── Services/
│
├── config/
│   └── config.php
│
├── routes/
│   └── web.php
│
├── storage/
│   └── logs/
│
├── public/
│   ├── index.php
│   ├── .htaccess
│   ├── css/
│   ├── js/
│   └── imagens/
│
├── .gitignore-example
├── .env-example
├── .htaccess-example
├── composer.json
└── README.md
```

## Como iniciar um novo projeto

### 1. Clone o repositório base

```bash
git clone https://github.com/andregvg/php-mvc-starter.git novo-projeto
cd novo-projeto
```

### 2. Instale as dependências do Composer

```bash
composer install
```

### 3. Renomeie os arquivos de exemplo

```bash
mv .env-example .env
mv .gitignore-example .gitignore
mv .htaccess-example public/.htaccess
```

### 4. Configure o `.env`

Abra o arquivo `.env` e edite as variáveis conforme necessário. Exemplo:

```
APP_NAME="Meu Projeto"
APP_ENV=development
DB_HOST=localhost
DB_NAME=nome_banco
DB_USER=root
DB_PASS=senha
```
**IMPORTANTE!** Valores com espaços devem ser entre aspas.

### 5. Ajuste o RewriteBase do `.htaccess`

Abra o arquivo `public/.htaccess` e altere `RewriteBase` para apontar corretamente à `public` na estrutura de diretórios:

```apacheconf
RewriteBase /novo-projeto/public/
```

### 6. Inicializando novo repositório Git

```bash
git init
git add .
git commit -m "Primeiro commit do NOVO-PROJETO baseado no php-mvc-starter"
git remote add origin https://github.com/USUARIO/NOME_DO_REPOSITORIO.git
git push -u origin master
```

##  Observações

##### `.env`
Armazena variáveis de ambiente como configurações do app, conexões de banco etc, que não devem ser versionadas.

##### `.gitignore`
Define quais arquivos e pastas devem ser ignorados pelo Git.

##### `composer.json`
Gerencia dependências do projeto, autoloading e metadados (nome, autor, etc).
É usado para gerenciar dependências e autoload do seu projeto.

- Já está configurado com `autoload` PSR-4
- Inclui o pacote `vlucas/phpdotenv` para carregar variáveis do `.env`

##### `.htaccess`
Redireciona URLs para `index.php`. Essencial para rotas limpas e amigáveis.

--

### E se eu não quiser usar o `.env`?

Você pode optar por remover a dependência do `vlucas/phpdotenv` e configurar as variáveis em constantes diretamente no `config.php`. Este pacote permite carregar variáveis do `.env` no PHP como `$_ENV` e `$_SERVER`. Evita deixar configurações sensíveis no código.

Se decidir **não usá-lo**:

1. Remover a linha `composer.json`:

```json
"vlucas/phpdotenv": "^5.5"
```

2. Rodar:

```bash
composer update
```
 
 Também será necessário remover as referências em `public/index.php`:

---

> Criado por [agvg](mailto:agvg@gmail.com) 


