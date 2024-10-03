<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>

    <form method="POST">
        <label for="numero">escreva número:</label>
        <input type="number" name="numero" id="numero" required><br><br>

        <button type="submit">Analisar</button>
    </form>

    <?php
    // guarda a informação do número 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        // trata o número pra ver se é divisível por 2 ou não 
        if ($numero % 2 == 0) {
            echo "<p>Valor divisível por 2</p>";
        } else {
            echo "<p>O valor não é divisível por 2</p>";
        }
    }
    ?>

</body>
</html>
