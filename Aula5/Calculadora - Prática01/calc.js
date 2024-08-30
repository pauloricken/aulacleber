function addToDisplay(value) {
    document.getElementById("display").value += value;
}

function clearDisplay() {
    document.getElementById("display").value = '';
    document.getElementById("result").textContent = ''; // limpa o resultado também
}

function calculate() {
    try {
        var displayElement = document.getElementById("display");
        var result = eval(displayElement.value);
        
        // determinação de cor para cada tipo de resultado -- zero, negativos e positivos 
        var color;
        if (result > 0) {
            color = 'green';
        } else if (result < 0) {
            color = 'red';
        } else {
            color = 'gray';
        }

        // chama e mostra o resultado conforme a cor
        var resultElement = document.getElementById("result");
        resultElement.textContent = 'Resultado: ' + result;
        resultElement.style.color = color; // definido com  a cor com base no resultado
        
        displayElement.value = ''; // limpa o display após mostrar o resultado
    } catch (e) {
        var resultElement = document.getElementById("result");
        resultElement.textContent = 'Erro: ' + e.message;
        resultElement.style.color = 'black'; // Definir a cor para erro
    }
}
