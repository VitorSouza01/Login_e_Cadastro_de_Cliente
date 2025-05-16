<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

echo "<h1>Bem-vindo, " . $_SESSION['usuario'] . "!</h1>";
echo "<a href='logout.php'>Sair</a>";
?>
