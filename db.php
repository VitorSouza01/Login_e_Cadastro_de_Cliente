<?php
// Conexão com o banco de dados
$server = "localhost";
$user = "root";
$password = "root";
$database = "aula";

$conn = new mysqli($server, $user, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}