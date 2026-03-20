<?php

declare(strict_types=1);

if (!defined('APP_ROOT')) {
    define('APP_ROOT', __DIR__);
}

if (!function_exists('app_path')) {
    function app_path(string $relativePath): string
    {
        return APP_ROOT . '/' . ltrim($relativePath, '/');
    }
}

if (!function_exists('app_include')) {
    function app_include(string $relativePath): void
    {
        require app_path($relativePath);
    }
}
