<?php
$config = include __DIR__ . '/config.ini.php';

$envContent = "";
foreach ($config as $key => $value) {
    if (is_bool($value)) {
        $value = $value ? 'true' : 'false';
    }
    $envContent .= "$key=$value\n";
}

file_put_contents(__DIR__ . '/.env', $envContent);
echo ".env created in sample-app\n";
