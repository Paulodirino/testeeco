<?php include 'header.php'; ?>
<main>
    <h2>Fale Conosco</h2>
    <form method="POST" action="envia_contato.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</main>
<?php include 'footer.php'; ?>
