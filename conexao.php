<?php
$host = 'sql205.infinityfree.com';
$db   = 'if0_39544451_livros_site';
$user = 'if0_39544451';
$pass = 'zQvRqkbKOnr4';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  die("Erro ao conectar ao banco: " . $e->getMessage());
}
