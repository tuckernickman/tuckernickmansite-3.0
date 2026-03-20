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

    // Use SQLite as a local fallback when MySQL is not configured.
    if ($db['db_name'] === '' || $db['user'] === '') {
        $sqlitePath = dirname(__DIR__) . '/config/local.sqlite';
        $pdo = new PDO('sqlite:' . $sqlitePath, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        db_sqlite_ensure_schema($pdo);
        return $pdo;
    }

    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $db['host'], $db['db_name']);
    $pdo = new PDO($dsn, $db['user'], $db['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    return $pdo;
}

function db_sqlite_ensure_schema(PDO $pdo): void
{
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS tnickman_form_response (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name TEXT NOT NULL,
            last_name TEXT NOT NULL,
            email TEXT NOT NULL,
            phone TEXT NOT NULL,
            contact_message TEXT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )
    ");
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

function db_insert_contact_message(string $firstName, string $lastName, string $email, string $phone, string $message): void
{
    $pdo = db_connection();
    $table = db_contact_table_name();

    $sql = "INSERT INTO {$table} (first_name, last_name, email, phone, contact_message) VALUES (:first_name, :last_name, :email, :phone, :contact_message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':email' => $email,
        ':phone' => $phone,
        ':contact_message' => $message,
    ]);
}
