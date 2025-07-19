<?php
$env = parse_ini_file(__DIR__ . '/../.env');
echo "<h3>Test PHP App</h3>";
echo "<p>Environment: " . $env['APP_ENV'] . "</p>";
echo "<p>DB Host: " . $env['DB_HOST'] . "</p>";
