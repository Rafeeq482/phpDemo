<?php
foreach (glob(__DIR__ . '/../apps/*') as $app) {
    $convertScript = $app . '/convert-to-env.php';
    if (file_exists($convertScript)) {
        echo "Running $convertScript...\n";
        system("php $convertScript");
    }
}
