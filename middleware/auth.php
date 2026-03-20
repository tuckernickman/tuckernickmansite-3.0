<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

function auth_start_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    session_start();
}

function auth_is_admin(): bool
{
    auth_start_session();
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function auth_attempt_login(string $username, string $password): bool
{
    auth_start_session();

    $adminConfig = app_config()['admin'];
    $expectedUser = $adminConfig['username'];
    $hash = $adminConfig['password_hash'];

    if ($hash === '') {
        return false;
    }

    if (!hash_equals($expectedUser, $username)) {
        return false;
    }

    if (!password_verify($password, $hash)) {
        return false;
    }

    session_regenerate_id(true);
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $expectedUser;

    return true;
}

function auth_require_admin(): void
{
    if (auth_is_admin()) {
        return;
    }

    header('Location: /admin/login.php');
    exit;
}

function auth_logout(): void
{
    auth_start_session();
    $_SESSION = [];

    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'] ?? '', $params['secure'], $params['httponly']);
    }

    session_destroy();
}
