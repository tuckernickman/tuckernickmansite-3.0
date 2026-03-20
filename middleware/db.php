<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

function db_connection(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $db = app_config()['database'];
    if ($db['db_name'] === '' || $db['user'] === '') {
        throw new RuntimeException('Database configuration is incomplete.');
    }

    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $db['host'], $db['db_name']);
    $pdo = new PDO($dsn, $db['user'], $db['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    return $pdo;
}

function db_contact_table_name(): string
{
    $table = app_config()['database']['contact_table'];
    if (!preg_match('/^[A-Za-z0-9_]+$/', $table)) {
        throw new RuntimeException('Invalid contact table name.');
    }

    return $table;
}

function db_fetch_contact_messages(): array
{
    $pdo = db_connection();
    $table = db_contact_table_name();

    $sql = "SELECT id, first_name, last_name, email, phone, contact_message FROM {$table} ORDER BY id DESC";
    $stmt = $pdo->query($sql);

    return $stmt->fetchAll();
}
