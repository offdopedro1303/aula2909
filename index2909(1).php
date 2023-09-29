
<?php
// Declarar duas variáveis e uma string
$numero1 = 70;
$numero2 = 73;
$texto = "Isso é uma string";

// Ver se a variável é um número
if (is_numeric($numero1)) {
    // Se for, multiplicar por 2
    $resultado = $numero1 * 2;

    // Verifica se o número é maior que 100
    if ($resultado > 100) {
        // Se sim, ele mostra uma mensagem
        echo "O resultado ($resultado) é maior que 100.";
    }
}
?>
