<?php include 'header.php'; ?>
<main>
    <h2>Formulário de Doação - Lixo Eletrônico</h2>
    <form method="POST" action="processa_eletronico.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="tipo_lixo">Tipo de Lixo Eletrônico:</label>
        <select id="tipo_lixo" name="tipo_lixo" required>
            <option value="computador">Computador</option>
            <option value="celular">Celular</option>
            <option value="televisao">Televisão</option>
            <option value="bateria">Bateria</option>
            <option value="outro">Outro</option>
        </select><br>

        <label for="descricao">Descrição do Item:</label>
        <textarea id="descricao" name="descricao" rows="4"></textarea><br>

        <label for="endereco">Endereço de Retirada:</label>
        <textarea id="endereco" name="endereco" rows="4" required></textarea><br>

        <input type="submit" value="Enviar Doação">
    </form>
</main>
<?php include 'footer.php'; ?>
