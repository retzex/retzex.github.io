<?php
// db.php - Conexão com o banco de dados

$host = "sql205.infinityfree.com";      // troque pelo host do seu banco, geralmente é localhost
$user = "if0_39544451";    // seu usuário do banco
$pass = "zQvRqkbKOnr4";      // sua senha do banco
$dbname = "if0_39544451_livros_site"; // nome do banco que você criou

// Criando conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Se chegar aqui, tá suave, conexão OK!
?>