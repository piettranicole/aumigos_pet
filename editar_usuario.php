<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$usuario =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD -AUMIGOS</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - AUMIGOS</h1>
    </header>
    <main>
        <h2>Editando o usuário <?php echo $usuario["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id["id"]?>">

            <label for="nome">nome:</label>
            <input type="text" name="nome" value="<?php echo $nome["nome"]?>">
            <br>
            <label for="email">email:</label>
            <input type="text" name="email" value="<?php echo $email["email"]?>">
            <br>
            <label for="id">id:</label>
            <input type="number" name="id" value="<?php echo $id["id"]?>" step="0.01">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>