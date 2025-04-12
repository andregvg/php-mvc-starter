<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenvPath = dirname(__DIR__);
if (file_exists($dotenvPath . '/.env')) {
    $dotenv = Dotenv::createImmutable($dotenvPath);
    $dotenv->load();
} else {
    echo 'Arquivo .env não encontrado.';
    exit;
}

echo 'Aplicação: ' . $_ENV['APP_NAME'];
