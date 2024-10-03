<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex07</title>
</head>
<body>

    <form method="POST">
        <label for="valor_vista">qual o valor à vista do carro (R$):</label>
        <input type="number" name="valor_vista" id="valor_vista" value="22500" required><br><br>

        <label for="valor_parcela">qual o valor de cada parcela (R$):</label>
        <input type="number" name="valor_parcela" id="valor_parcela" value="489.65" required><br><br>

        <label for="num_parcelas">qual o número de parcelas:</label>
        <input type="number" name="num_parcelas" id="num_parcelas" value="60" required><br><br>

        <button type="submit">Calcul0 de juros </button>
    </form>

    <?php
    // Função para calcular o total das parcelas
    function calcular_total_parcelas($valor_parcela, $num_parcelas) {
        return $valor_parcela * $num_parcelas;
    }

    //  calcula os juros pagos
    function calcular_juros($valor_vista, $total_parcelas) {
        return $total_parcelas - $valor_vista;
    }
//guardas as infos 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_vista = $_POST['valor_vista'];
        $valor_parcela = $_POST['valor_parcela'];
        $num_parcelas = $_POST['num_parcelas'];

        // Cálculo do total das parcelas
        $total_parcelas = calcular_total_parcelas($valor_parcela, $num_parcelas);

        // Cálculo dos juros pagos
        $juros_pagos = calcular_juros($valor_vista, $total_parcelas);

        // Exibição do resultado
        echo "<p>O valor total pago no financiamento é R$ $total_parcelas.</p>";
        echo "<p>Os juros pagos por Mariazinha foram R$ $juros_pagos.</p>";
    }
    ?>

</body>
</html>
