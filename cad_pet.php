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
            <label for="id">Id:</label>
            <input type="int" name="id">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
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