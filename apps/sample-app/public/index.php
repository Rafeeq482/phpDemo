<?php
$env = parse_ini_file(__DIR__ . '/../.env');

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>{$env['APP_NAME']} - Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #fff);
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            text-align: center;
            color: #0077b6;
            margin-bottom: 30px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .info:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: 600;
            color: #555;
        }

        .value {
            color: #222;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.85rem;
            background-color: #e0f2f1;
            color: #00796b;
        }

        @media (max-width: 600px) {
            .info {
                flex-direction: column;
                align-items: flex-start;
            }
            .value {
                margin-top: 5px;
            }
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>{$env['APP_NAME']} Dashboard</h1>
        <div class='info'><span class='label'>Environment:</span> <span class='value badge'>{$env['APP_ENV']}</span></div>
        <div class='info'><span class='label'>Database Host:</span> <span class='value'>{$env['DB_HOST']}</span></div>
        <div class='info'><span class='label'>Database creator:</span> <span class='value'>{$env['DB_USERNAME']}</span></div>
        <div class='info'><span class='label'>App Version:</span> <span class='value'>{$env['APP_VERSION']}</span></div>
        <div class='info'><span class='label'>Maintainer:</span> <span class='value'>{$env['MAINTAINER']}</span></div>
        <div class='info'><span class='label'>Debug Mode:</span> <span class='value'>" . ($env['DEBUG_MODE'] === 'true' ? '<span class="badge">Enabled</span>' : '<span class="badge" style="background:#ffebee;color:#c62828;">Disabled</span>') . "</span></div>
        <div class='info'><span class='label'>SourceTESTING123:</span> <span class='value'>Loaded from .env file</span></div>
    </div>
</body>
</html>
";
