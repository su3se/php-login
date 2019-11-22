<?php
/*********************************************
 Module Name : database.php
 Update      : 2019/11/2
 Creation    : Su3se
 Comment     : データベース接続設定
**********************************************/

function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}

function connect()
{
    $dsn = 'mysql:host=localhost;dbname=tsf_db;charset=utf8mb4;';
    $username = 'root';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;
}
