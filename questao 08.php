questao 08
<?php
// Solicita a temperatura em Fahrenheit
echo "Digite a temperatura em graus Fahrenheit: ";
$fahrenheit = trim(fgets(STDIN));

// Verifica se a entrada é numérica
if (is_numeric($fahrenheit)) {
    // Converte Fahrenheit para Celsius usando a fórmula fornecida
    $celsius = (5 * ($fahrenheit - 32)) / 9;
    
    // Exibe a temperatura em Celsius
    echo "A temperatura em Celsius é: " . number_format($celsius, 2) . "°C\n";
} else {
    // Caso a entrada não seja numérica
    echo "Por favor, insira um valor numérico válido para a temperatura.\n";
}
?>
