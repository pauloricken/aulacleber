<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>
<body>

    <form method="POST">
        <label for="base">escreva a base do triângulo (em metros):</label>
        <input type="number" name="base" id="base" required><br><br>

        <label for="altura">escreva a altura do triângulo (em metros):</label>
        <input type="number" name="altura" id="altura" required><br><br>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        // Formula pra calcular 
        $area = ($base * $altura) / 2;

        // Exibição do resultado
        echo "<p>A área do triângulo retângulo de base $base metros e altura $altura metros é $area metros quadrados².</p>";
    }
    ?>

</body>
</html>
