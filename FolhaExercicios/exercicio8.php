<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex08</title>
</head>
<body>

<form method="POST" action="">
    <label for="capital">Valor da moto :</label><br>
    <input type="number" id="capital" name="capital" value="8654" required><br><br>
    <input type="submit" value="Calcular Parcelas">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // pega  o valor do capital 
    $capital = $_POST['capital'];
    
    // Função para calcular o parcelamento 
    function calcularParcelasPaulinho($capital, $taxa_inicial) {
        //  nesse laço percorre as opções de parcelamento 24, 36, 48 e 60 meses, aumentando a taxa de juros em 0,5% a cada iteração e vai  calculando o valor das parcelas com base no montante total. ele exibe o valor da parcela para cada opção de forma sequencial.
        for ($parcelas = 24; $parcelas <= 60; $parcelas += 12) {
            $taxa = $taxa_inicial + (0.005 * (($parcelas - 24) / 12)); // Aumenta a taxa de juros conforme solicitado 
            $montante = $capital * (1 + ($taxa * $parcelas / 100));
            $valor_parcela = $montante / $parcelas;
            
            // mostra  o resultado com a formatação apropriada
            echo "<p>Parcelamento em $parcelas vezes (taxa de " . ($taxa * 100) . "%): R$ " 
                . number_format($valor_parcela, 2, ',', '.') . " por mês.</p>";
        }
    }

    // Chama a função para exibir os resultados
    calcularParcelasPaulinho($capital, 0.015); // Taxa inicial de 1.5% conforme passada na lista de exercicios 
}
?>

</body>
</html>
