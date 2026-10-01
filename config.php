
<?php

define('APP_NAME', 'CEG F/A WACHA');
define('DB_HOST', 'sql104.infinityfree.com');
define('DB_NAME', 'if0_43045682_Ceg');
define('DB_USER', 'if0_43045682');
define('DB_PASS', 'VQrbqdWM6OaFT');
function db(): PDO {
    static $pdo = null;

    if ($pdo === null) {
        $pdo = new PDO(
            'mysql:host=' . DB_HOST .
            ';dbname=' . DB_NAME .
            ';charset=utf8mb4',
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
    }

    return $pdo;
}