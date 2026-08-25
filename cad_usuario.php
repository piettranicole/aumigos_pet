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
         <h2>Usuarios cadastrados:</h2>
            <ul>
                <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                    <li>
                        <strong>Nome:</strong> <?php echo $usuario['nome']; ?> |
                        <strong>Email:</strong> <?php echo $usuario['email']; ?>
                        <strong>Id:</strong> <?php echo $usuario['id']; ?>
                    </li>
                <?php } ?>