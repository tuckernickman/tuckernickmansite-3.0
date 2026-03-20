<?php

declare(strict_types=1);

require_once __DIR__ . '/auth.php';

function csrf_token(): string
{
    auth_start_session();

    if (!isset($_SESSION['csrf_token']) || !is_string($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function csrf_validate(?string $submitted): bool
{
    auth_start_session();

    if (!isset($_SESSION['csrf_token']) || !is_string($_SESSION['csrf_token'])) {
        return false;
    }

    if ($submitted === null) {
        return false;
    }

    return hash_equals($_SESSION['csrf_token'], $submitted);
}

function esc_html(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
