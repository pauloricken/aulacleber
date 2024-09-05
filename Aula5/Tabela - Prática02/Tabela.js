var linhaAdicionada = false;  // Controle para evitar adicionar múltiplas linhas
var colunaAdicionada = false; // Controle para evitar adicionar múltiplas colunas

function adicionarLinhaTotalizadora() {
    if (linhaAdicionada) {
        alert("A linha totalizadora já foi adicionada.");
        return;
    }

    var tabela = document.getElementById("notasTabela");
    var linhas = tabela.rows;
    var novaLinha = tabela.insertRow(-1);  // Adiciona a linha ao final
    var celulaTitulo = novaLinha.insertCell(0);
    celulaTitulo.innerHTML = "Média por Semestre";  // Define o título da linha

    // for  para calcular a média de cada semestre
    for (var j = 1; j < linhas[0].cells.length; j++) {
        var soma = 0;
        var contador = 0;
        for (var i = 1; i < linhas.length - 1; i++) {
            var valor = parseFloat(linhas[i].cells[j].innerHTML);
            if (!isNaN(valor)) {
                soma += valor;
                contador++;
            }
        }
        var media = soma / contador;
        var celulaMedia = novaLinha.insertCell(j);
        celulaMedia.innerHTML = media.toFixed(2);
    }

    linhaAdicionada = true;
    document.getElementById("adicionarColunaBtn").disabled = false;  // Habilita o botão de adicionar coluna
}

function adicionarColunaTotalizadora() {
    if (!linhaAdicionada) {
        alert("Você precisa adicionar a linha totalizadora antes de adicionar a coluna totalizadora.");
        return;
    }

    if (colunaAdicionada) {
        alert("A coluna totalizadora já foi adicionada.");
        return;
    }

    var tabela = document.getElementById("notasTabela");
    var linhas = tabela.rows;

    // adiciona a coluna ao final do cabeçalho
    linhas[0].insertCell(-1).outerHTML = "<th>Média por Aluno</th>";

    // Calcula a média de cada aluno
    for (var i = 1; i < linhas.length; i++) {
        if (linhaAdicionada && i === linhas.length - 1) {
            linhas[i].insertCell(-1).innerHTML = "-";
            continue;
        }

        var soma = 0;
        var contador = 0;
        for (var j = 1; j < linhas[0].cells.length - 1; j++) { // Ajuste para ignorar a coluna de média por semestre
            var valor = parseFloat(linhas[i].cells[j].innerHTML);
            if (!isNaN(valor)) {
                soma += valor;
                contador++;
            }
        }
        if (contador > 0) {
            var media = soma / contador;
            linhas[i].insertCell(-1).innerHTML = media.toFixed(2);
        } else {
            linhas[i].insertCell(-1).innerHTML = "-";
        }
    }

    colunaAdicionada = true;
}