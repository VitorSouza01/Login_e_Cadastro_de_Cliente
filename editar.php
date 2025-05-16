<?php 
include 'db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM usuario WHERE id=$id";
$res = $conn->query($sql);
$cliente = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Editar Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">       
    </head>
    <body>
        <div class="container mt-5">
            <h2>Editar Cliente</h2>
            <form action="salvar_edicao.php" method="POST">
                <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?= $cliente['nome'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $cliente['email'] ?>" required> 
                </div>
                <div class="mb-3">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="<?= $cliente['telefone'] ?> ">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</html>
