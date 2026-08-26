<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "aumigos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT animais.*, clientes.nome AS responsavel
        FROM animais
        INNER JOIN clientes ON animais.cliente_id = clientes.id";

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Animais</title>
</head>

<body>

<h1>Animais cadastrados</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Raça</th>
        <th>Idade</th>
    </tr>

    <?php while ($animal = $resultado->fetch_assoc()) { ?>

    <tr>
        <td><?= $animal['id'] ?></td>
        <td><?= $animal['nome'] ?></td>
        <td><?= $animal['especie'] ?></td>
        <td><?= $animal['raca'] ?></td>
        <td><?= $animal['idade'] ?> anos</td>
    
        <td>
            <a href="editar_animal.php?id=<?= $animal['id'] ?>">Editar</a>

            <a href="excluir_animal.php?id=<?= $animal['id'] ?>"
               onclick="return confirm('Deseja excluir este animal?')">
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>