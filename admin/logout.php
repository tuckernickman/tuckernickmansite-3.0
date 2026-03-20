<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/middleware/auth.php';

auth_logout();
header('Location: /admin/login.php');
exit;
