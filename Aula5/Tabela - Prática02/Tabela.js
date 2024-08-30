function calcularMedias() {
    var tabela = document.getElementById("notasTabela");
    var linhas = tabela.rows;
    var somaColunas = [0, 0, 0];
    var qtdLinhas = linhas.length - 2;  // Desconsidera cabeçalho e a última linha de médias por semestre
    
    // Calcular médias por aluno
    for (var i = 1; i <= qtdLinhas; i++) {
        var somaLinha = 0;
        for (var j = 1; j <= 3; j++) {
            var nota = parseFloat(linhas[i].cells[j].innerHTML);
            somaLinha += nota;
            somaColunas[j - 1] += nota;
        }
        linhas[i].cells[4].innerHTML = (somaLinha / 3).toFixed(2);
    }
    
    // Calcular médias por semestre
    for (var j = 1; j <= 3; j++) {
        linhas[qtdLinhas + 1].cells[j].innerHTML = (somaColunas[j - 1] / qtdLinhas).toFixed(2);
    }
}

function adicionarColunaTotalizar() {
    var tabela = document.getElementById("notasTabela");
    var linhas = tabela.rows;
    
    // Adicionar nova coluna no cabeçalho
    linhas[0].insertCell(-1).outerHTML = "<th>Média Total</th>";
    
    // Adicionar nova célula nas linhas de dados
    for (var i = 1; i < linhas.length - 1; i++) {
        var somaLinha = 0;
        for (var j = 1; j <= 3; j++) {
            somaLinha += parseFloat(linhas[i].cells[j].innerHTML);
        }
        var mediaTotal = (somaLinha / 3).toFixed(2);
        linhas[i].insertCell(-1).innerHTML = mediaTotal;
    }
    
    // Adicionar nova célula na linha de médias por semestre
    linhas[linhas.length - 1].insertCell(-1).innerHTML = "";
}

function adicionarLinhaTotalizar() {
    var tabela = document.getElementById("notasTabela");
    var linhas = tabela.rows;
    var qtdSemestres = 3; // Número de semestres
    var somaColunas = [0, 0, 0];
    var qtdLinhas = linhas.length - 2;  // Desconsidera cabeçalho e a última linha de médias por semestre
    
    // Adicionar nova linha no final da tabela
    var novaLinha = tabela.insertRow(-1);
    novaLinha.insertCell(0).outerHTML = "<th>Média por Semestre</th>";
    
    // Calcular média de cada semestre
    for (var j = 1; j <= qtdSemestres; j++) {
        var somaSemestre = 0;
        for (var i = 1; i <= qtdLinhas; i++) {
            somaSemestre += parseFloat(linhas[i].cells[j].innerHTML);
        }
        var mediaSemestre = (somaSemestre / qtdLinhas).toFixed(2);
        novaLinha.insertCell(j).innerHTML = mediaSemestre;
    }
    
    // Adicionar célula vazia para a coluna de médias totais
    novaLinha.insertCell(qtdSemestres + 1).innerHTML = "";
}

// Chamar função de cálculo ao carregar a página
calcularMedias();
