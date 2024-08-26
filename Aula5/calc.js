function addToDisplay(value) {
    document.getElementById("display").value += value;
}
 
function clearDisplay() {
    document.getElementById("display").value = '';
}

function calculate() {
    try {
        var result = eval(document.getElementById("display").value);
        alert('Resultado: ' + result); // Vai mostrar resultado em um alerta no html
        clearDisplay(); // Limpa o display após mostrar o resultado
    } catch (e) {
        alert('Erro: ' + e.message); // Traz o resultado no Alert 
    }
}
