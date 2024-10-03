<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex06</title>
</head>
<body>

    <form method="POST">
        <h3>Digite o preço e a quantidade (em Kg) dos itens comprados:</h3>

        <label for="maca_preco">Preço da Maçã (por Kg):</label>
        <input type="number" name="maca_preco" id="maca_preco" required><br><br>
        <label for="maca_quantidade">Quantidade de Maçã (Kg):</label>
        <input type="number" name="maca_quantidade" id="maca_quantidade" required><br><br>

        <label for="melancia_preco">Preço da Melancia (por Kg):</label>
        <input type="number" name="melancia_preco" id="melancia_preco" required><br><br>
        <label for="melancia_quantidade">Quantidade de Melancia (Kg):</label>
        <input type="number" name="melancia_quantidade" id="melancia_quantidade" required><br><br>

        <label for="laranja_preco">Preço da Laranja (por Kg):</label>
        <input type="number" name="laranja_preco" id="laranja_preco" required><br><br>
        <label for="laranja_quantidade">Quantidade de Laranja (Kg):</label>
        <input type="number" name="laranja_quantidade" id="laranja_quantidade" required><br><br>

        <label for="repolho_preco">Preço do Repolho (por Kg):</label>
        <input type="number" name="repolho_preco" id="repolho_preco" required><br><br>
        <label for="repolho_quantidade">Quantidade de Repolho (Kg):</label>
        <input type="number" name="repolho_quantidade" id="repolho_quantidade" required><br><br>

        <label for="cenoura_preco">Preço da Cenoura (por Kg):</label>
        <input type="number" name="cenoura_preco" id="cenoura_preco" required><br><br>
        <label for="cenoura_quantidade">Quantidade de Cenoura (Kg):</label>
        <input type="number" name="cenoura_quantidade" id="cenoura_quantidade" required><br><br>

        <label for="batatinha_preco">Preço da Batatinha (por Kg):</label>
        <input type="number" name="batatinha_preco" id="batatinha_preco" required><br><br>
        <label for="batatinha_quantidade">Quantidade de Batatinha (Kg):</label>
        <input type="number" name="batatinha_quantidade" id="batatinha_quantidade" required><br><br>

        <button type="submit">Calcular Total</button>
    </form>

    <?php
    // Função para calcular o valor total de um produto
    function calcular_valor($preco, $quantidade) {
        return $preco * $quantidade;
    }

    // Função para verificar se o dinheiro disponível é suficiente
    function verificar_dinheiro($total_compra, $dinheiro_disponivel) {
        if ($total_compra > $dinheiro_disponivel) {
            $valor_excedente = $total_compra - $dinheiro_disponivel;
            return "<p style='color:red;'>Você excedeu o valor em R$ $valor_excedente. Joãozinho precisa de mais dinheiro!</p>";
        } elseif ($total_compra < $dinheiro_disponivel) {
            $valor_sobrando = $dinheiro_disponivel - $total_compra;
            return "<p style='color:blue;'>Joãozinho ainda pode gastar R$ $valor_sobrando.</p>";
        } else {
            return "<p style='color:green;'>Joãozinho gastou exatamente R$ 50,00. Saldo esgotado!</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Preços e quantidades dos produtos
        $maca_preco = $_POST['maca_preco'];
        $maca_quantidade = $_POST['maca_quantidade'];
        $melancia_preco = $_POST['melancia_preco'];
        $melancia_quantidade = $_POST['melancia_quantidade'];
        $laranja_preco = $_POST['laranja_preco'];
        $laranja_quantidade = $_POST['laranja_quantidade'];
        $repolho_preco = $_POST['repolho_preco'];
        $repolho_quantidade = $_POST['repolho_quantidade'];
        $cenoura_preco = $_POST['cenoura_preco'];
        $cenoura_quantidade = $_POST['cenoura_quantidade'];
        $batatinha_preco = $_POST['batatinha_preco'];
        $batatinha_quantidade = $_POST['batatinha_quantidade'];

        // Cálculo dos valores totais de cada produto
        $total_maca = calcular_valor($maca_preco, $maca_quantidade);
        $total_melancia = calcular_valor($melancia_preco, $melancia_quantidade);
        $total_laranja = calcular_valor($laranja_preco, $laranja_quantidade);
        $total_repolho = calcular_valor($repolho_preco, $repolho_quantidade);
        $total_cenoura = calcular_valor($cenoura_preco, $cenoura_quantidade);
        $total_batatinha = calcular_valor($batatinha_preco, $batatinha_quantidade);

        // Cálculo total da compra
        $total_compra = $total_maca + $total_melancia + $total_laranja + $total_repolho + $total_cenoura + $total_batatinha;

        // Verifica se o dinheiro será suficiente
        $dinheiro_disponivel = 50.00;
        echo verificar_dinheiro($total_compra, $dinheiro_disponivel);
    }
    ?>

</body>
</html>
