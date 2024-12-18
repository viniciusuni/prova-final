questao media
<?php
// Solicita a primeira nota
echo "Digite a primeira nota: ";
$nota1 = trim(fgets(STDIN));

// Solicita a segunda nota
echo "Digite a segunda nota: ";
$nota2 = trim(fgets(STDIN));

// Solicita a terceira nota
echo "Digite a terceira nota: ";
$nota3 = trim(fgets(STDIN));

// Verifica se as notas são válidas
if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
    // Calcula a média
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    // Exibe a média
    echo "A média do aluno é: " . number_format($media, 2) . "\n";
} else {
    // Caso alguma nota seja inválida
    echo "Por favor, insira apenas valores numéricos para as notas.\n";
}
?>