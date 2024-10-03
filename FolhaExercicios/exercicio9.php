<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex09</title>
</head>
<body>
<form method="POST" action="">
    <label for="capital">Valor da Moto (R$):</label><br>
    <input type="number" id="capital" name="capital" value="8654" required><br><br>
    <input type="submit" value="Calcular Parcelas">
</form>

<?php

// quase igual a atividade anterior, porém agora muada a formula M=C×(1+i)t 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // guarda o valor 
    $capital = $_POST['capital'];
    
    // Função para calcular o parcelamento juros compostos
    function calcularParcelasJuquinha($capital, $taxa_inicial) {
        for ($parcelas = 24; $parcelas <= 60; $parcelas += 12) {
            $taxa = $taxa_inicial + (0.003 * (($parcelas - 24) / 12)); // Aumenta a taxa de juros em 0,3% a cada nível
            $montante = $capital * pow((1 + $taxa), $parcelas); // Fórmula de juros compostos mencionada na lista de exercicios
            $valor_parcela = $montante / $parcelas;
            
            // Exibe o resultado com a formatação apropriada
            echo "<p>Parcelamento em $parcelas vezes (taxa de " . ($taxa * 100) . "%): R$ " 
                . number_format($valor_parcela, 2, ',', '.') . " por mês.</p>";
        }
    }

    // Chama a função de resultados
    calcularParcelasJuquinha($capital, 0.02); // Taxa inicial com os 2% para 24 meses
}
?>

</body>
</html>
