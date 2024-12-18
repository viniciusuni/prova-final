Questao do raio
<?php
// Solicita o raio ao usuário
echo "Digite o raio do círculo: ";
$raio = trim(fgets(STDIN));  // Lê a entrada do usuário e remove espaços extras

// Verifica se o valor informado é um número válido
if (is_numeric($raio) && $raio > 0) {
    // Calcula o perímetro (2 * pi * raio)
    $perimetro = 2 * M_PI * $raio;
    
    // Calcula a área (pi * raio²)
    $area = M_PI * pow($raio, 2);
    
    // Exibe o resultado formatado com 2 casas decimais
    echo "Perímetro do círculo: " . number_format($perimetro, 2) . "\n";
    echo "Área do círculo: " . number_format($area, 2) . "\n";
} else {
    echo "Por favor, insira um valor válido para o raio.\n";
}
?>
