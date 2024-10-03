<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>

    <form method="POST">
        <label for="valor1"> valor 1 :</label>
        <input type="number" name="valor1" id="valor1" required><br><br>

        <label for="valor2"> valor 2 :</label>
        <input type="number" name="valor2" id="valor2" required><br><br>

        <label for="valor3"> valor3 :</label>
        <input type="number" name="valor3" id="valor3" required><br><br>

        <button type="submit">Somar</button>
    </form>

     
    <?php
    // Guardando informações do formulário 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        
// calculando 
        $soma = $valor1 + $valor2 + $valor3;

// condições de validações 
        if ($valor1 > 10) {
            echo "<p style='color:blue;'>A soma é: $soma</p>";
        } elseif ($valor2 < $valor3) {
            echo "<p style='color:green;'>A soma é: $soma</p>";
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            echo "<p style='color:red;'>A soma é: $soma</p>";
        } else {
            echo "<p>A valor total : $soma</p>"; // impressão do resultado 
        }
    }
    ?>

</body>
</html>
