<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Clientes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="mb-4">Lista de Clientes</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th><td>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM usuario";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nome']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['telefone']}</td>
                                <td>
                                    <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                                    <a href='excluir.php?id={$row['id']}' class='btn btn-danger btn-sm'
                                    onclick='return confirm(\"Deseja excluir?\")'>Excluir</a>
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    </html>
