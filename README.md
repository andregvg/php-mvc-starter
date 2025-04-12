# PHP MVC Starter

Este repositório é uma estrutura base para novos projetos pessoais em PHP, utilizando o padrão MVC, PSR-4 e suporte opcional ao uso de variáveis de ambiente com `vlucas/phpdotenv`.

---

## Estrutura de Pastas

```
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
│   ├── css/
│   ├── js/
│   └── imagens/
│
├── .gitignore-example
├── .env-example
├── composer.json
└── README.md
```

---

## Como utilizar este repositório para iniciar um novo projeto

### 1. Clone este repositório
```bash
git clone https://github.com/andregvg/php-mvc-starter.git nome-do-projeto
cd nome-do-projeto
```

### 2. Inicie o Git para o novo projeto
```bash
git init
git add .
git commit -m "Início do projeto baseado no php-mvc-starter"
```

---

## Configuração do Composer

### 3. Instale as dependências do Composer
```bash
composer install
```

### 4. Atualize o `composer.json` com o nome do seu projeto

Abra o `composer.json` e altere os campos:

```json
"name": "vendor/novo-projeto",
"description": "Descrição do novo projeto",
"authors": [
  {
    "name": "Seu Nome",
    "email": "seu@email.com"
  }
]
```

---

## Arquivos de configuração

### .gitignore

Define os arquivos e diretórios que o Git deve ignorar.

> Após clonar, renomeie `.gitignore-example` para `.gitignore`:
```bash
mv .gitignore-example .gitignore
```

---

### .env

Armazena variáveis sensíveis e de configuração.

> Após clonar, copie `.env-example` para `.env`:
```bash
cp .env-example .env
```

Edite os valores conforme seu ambiente:

```
APP_NAME=Novo-Projeto
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_HOST=localhost
DB_NAME=meubanco
DB_USER=root
DB_PASS=
```

---

## Sobre o uso de `vlucas/phpdotenv`

Este pacote carrega as variáveis do `.env` para o ambiente PHP (`$_ENV`).

### Se decidir **não usar**:

1. Remova a dependência:
   ```bash
   composer remove vlucas/phpdotenv
   ```

2. Remova a chamada no `public/index.php`:
   ```php
   use Dotenv\Dotenv;
   $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
   $dotenv->load();
   ```

---

## Resumo dos comandos iniciais

```bash
# Clonar e iniciar novo projeto
git clone https://github.com/andregvg/php-mvc-starter.git nome-do-projeto
cd nome-do-projeto
git init
git add .
git commit -m "Início do projeto baseado no php-mvc-starter"

# Renomear arquivos de configuração
mv .gitignore-example .gitignore
cp .env-example .env

# Instalar dependências do Composer
composer install
```
