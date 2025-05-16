<?php
include 'db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "UPDATE usuario SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

if ($conn->query($sql) == TRUE) {
    header("Location: index.php");
} else {
    echo "Erro: " . $conn->error;
}
?>
