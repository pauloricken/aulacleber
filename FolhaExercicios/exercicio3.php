<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex03</title>
</head>
<body>

    <form method="POST">
        <label for="lado">informe o comprimento do lado do quadrado (em metros²):</label>
        <input type="number" name="lado" id="lado" required><br><br>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];

        // conforme regra, para descobrirmos a aréa de um de quadrado precisamos fazer o lado vezes o lado 
        $area = $lado * $lado;

        // mostra o resultado
        echo "<p> área do quadrado de lado $lado metros é $area metros quadrados.</p>";
    }
    ?>

</body>
</html>
