<?php
$host = "0.tcp.ap.ngrok.io";
$db = "cheftops";
$port = "14867";
$user = "postgres";
$pass = "123456";

$dsn = "pgsql:host=$host;port=$port;dbname=$db";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
