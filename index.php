<?php

include "infra/conexao.php";
$aumigos = mysqli_query($conexao, "SELECT * FROM pets");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUMIGOS</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - AUMIGOS</h1>
    </header>

    <main>
         <h2>Cadastro de Usuarios!</h2>
        <form action="public/usuarios/cadastrar_usuario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email">
            <br>
            <label for="id">Id:</label>
            <input type="int" name="id">
            <br>
        <h2>Cadastre os pets!</h2>
        <form action="public/pets/cadastrar_pet.php" method="POST">
            <label for="nome">Nome do pet:</label>
            <input type="text" name="nome">
            <br>
            <label for="especie">Espécie:</label>
            <input type="text" name="especie">
            <br>
            <label for="raca">Raça:</label>
            <input type="text" name="raca">
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade">
            <br>
            <label for="idade">Idade:</label>
            <input type="number" name="idade">
            <br>
            <label for="id">Id:</label>
            <input type="int" name="id">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>Usuarios cadastrados:</h2>
            <ul>
                <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                    <li>
                        <strong>Nome:</strong> <?php echo $usuario['nome']; ?> |
                        <strong>Email:</strong> <?php echo $usuario['email']; ?>
                        <strong>Id:</strong> <?php echo $usuario['id']; ?>
                    </li>
                <?php } ?>

        </div>
            <div>
                <h2>Pets cadastrados:</h2>
                <ul>
                    <?php while ($pet = mysqli_fetch_assoc($pets)) { ?>
                        <li>
                            <strong>Nome:</strong> <?php echo $pet['nome']; ?> |
                            <strong>Espécie:</strong> <?php echo $pet['especie']; ?> |
                            <strong>Raça:</strong> <?php echo $pet['raca']; ?> |
                            <strong>Idade:</strong> <?php echo $pet['idade']; ?>
                             <strong>Id:</strong> <?php echo $pet['id']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        
        </form>
    </main>
    
</body>
</html>