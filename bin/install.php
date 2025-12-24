<?php

declare(strict_types=1);

$autoload = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($autoload)) {
	$autoload = __DIR__ . '/../../../autoload.php';
}

require $autoload;

use Drago\Installer;

Installer::install();
