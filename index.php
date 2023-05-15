<?php

declare(strict_types=1);
require_once('autoload.php');

$user = new User('Пользователь', '1111');
$user->authenticate();
