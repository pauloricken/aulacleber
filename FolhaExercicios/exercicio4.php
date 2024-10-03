<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex04</title>
</head>
<body>

    <form method="POST">
        <label for="ladoA">comprimento do lado a (em metros²):</label>
        <input type="number" name="ladoA" id="ladoA" required><br><br>

        <label for="ladoB">comprimento do lado b (em metros²):</label>
        <input type="number" name="ladoB" id="ladoB" required><br><br>

        <button type="submit">calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = $_POST['ladoA'];
        $ladoB = $_POST['ladoB'];

        // diferente da área do quadrado aqui vamos ter que fazer ladoa * ladob para descobrir o valor da área do triângulo 
        $area = $ladoA * $ladoB;

        //mostra oresultado com <h1> ou <h3> dependendo do valor da área 
        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados².</h1>"; // área maior que 10 o resultado é exibido dentro da tag  <h1>
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados².</h3>"; // se não for maior, será exibido na tag <h1>
        }
    }
    ?>

</body>
</html>
