let numero;

do {
    numero = parseFloat(prompt("Insira um número entre 0 e 10:"));
    if (numero < 0 || numero > 10) {
        alert(`${numero} é um número inválido`);
    }
} while (numero < 0 || numero > 10) {
    alert(`${numero} é um número válido`);
};