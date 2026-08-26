<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "aumigos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
</head>

<body>

<h1>Clientes cadastrados</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>

    <?php while ($cliente = $resultado->fetch_assoc()) { ?>

    <tr>
        <td><?= $cliente['id'] ?></td>
        <td><?= $cliente['nome'] ?></td>
        <td><?= $cliente['email'] ?></td>

        <td>
            <a href="editar_cliente.php?id=<?= $cliente['id'] ?>">
              
            </a>

            <a href="excluir_cliente.php?id=<?= $cliente['id'] ?>"
               onclick="return confirm('Deseja excluir este cliente?')">
              
            </a>

            <a href="detalhes_cliente.php?id=<?= $cliente['id'] ?>">
                
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>