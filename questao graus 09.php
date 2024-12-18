questao graus 09
<?php
// Solicita a temperatura em Celsius
echo "Digite a temperatura em graus Celsius: ";
$celsius = trim(fgets(STDIN));

// Verifica se a entrada é numérica
if (is_numeric($celsius)) {
    // Converte Celsius para Fahrenheit
    $fahrenheit = ($celsius * 9/5) + 32;
    
    // Exibe a temperatura em Fahrenheit
    echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2) . "°F\n";
} else {
    // Caso a entrada não seja numérica
    echo "Por favor, insira um valor numérico válido para a temperatura.\n";