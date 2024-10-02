<?php include 'header.php'; ?>
<main>
    <h2>Formulário de Doação - Lacres e Tampas</h2>
    <form method="POST" action="processa_lacres.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="quantidade">Quantidade de Lacres ou Tampas (em kg):</label>
        <input type="number" id="quantidade" name="quantidade" step="0.1" required><br>

        <label for="endereco">Endereço de Retirada:</label>
        <textarea id="endereco" name="endereco" rows="4" required></textarea><br>

        <input type="submit" value="Enviar Doação">
    </form>
</main>
<?php include 'footer.php'; ?>

