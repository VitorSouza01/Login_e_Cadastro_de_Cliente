<?php
include 'db.php';
// Recebe os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

// Insere os dados na tabela
$sql = "INSERT INTO usuario (nome, cpf, email, sexo, endereco, telefone, senha)
VALUES ('$nome', '$cpf', '$email', '$sexo', '$endereco', '$telefone', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario Criado com sucesso!";
        header("Location: login.html");
} else {
    echo "Erro ao cadastrar o usuario: " . $conn->error;
}

$conn->close();
?>
