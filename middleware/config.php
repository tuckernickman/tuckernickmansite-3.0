<?php

declare(strict_types=1);

function app_config(): array
{
    static $config = null;
    if ($config !== null) {
        return $config;
    }

    $root = dirname(__DIR__);
    $configPath = $root . '/config/app.ini';
    $ini = [];

    if (is_file($configPath)) {
        $parsed = parse_ini_file($configPath, true, INI_SCANNER_TYPED);
        if (is_array($parsed)) {
            $ini = $parsed;
        }
    }

    $config = [
        'database' => [
            'host' => (string)($ini['database']['host'] ?? getenv('APP_DB_HOST') ?: 'localhost'),
            'db_name' => (string)($ini['database']['db_name'] ?? getenv('APP_DB_NAME') ?: ''),
            'user' => (string)($ini['database']['user'] ?? getenv('APP_DB_USER') ?: ''),
            'password' => (string)($ini['database']['password'] ?? getenv('APP_DB_PASSWORD') ?: ''),
            'contact_table' => (string)($ini['database']['contact_table'] ?? getenv('APP_CONTACT_TABLE') ?: 'tnickman_form_response'),
        ],
        'admin' => [
            'username' => (string)($ini['admin']['username'] ?? getenv('APP_ADMIN_USERNAME') ?: 'admin'),
            'password_hash' => (string)($ini['admin']['password_hash'] ?? getenv('APP_ADMIN_PASSWORD_HASH') ?: ''),
        ],
    ];

    return $config;
}
