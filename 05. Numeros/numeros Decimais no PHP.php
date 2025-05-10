<?php
// Manipulação de números decimais no PHP
// O PHP possui suporte nativo para números decimais, que são representados como floats.

// Exemplo de declaração de um número decimal
$numeroDecimal = 10.5;
echo "Número decimal: $numeroDecimal";      

// Exemplo de operações com números decimais
$soma = 10.5 + 5.2;
$subtracao = 10.5 - 5.2;        
$multiplicacao = 10.5 * 5.2;
$divisao = 10.5 / 5.2;
$modulo = 10.5 % 5.2; // Módulo não é aplicável a floats, mas o PHP não gera erro

echo "<br>";

echo "<br>Soma: $soma";
echo "<br>Subtração: $subtracao";   
echo "<br>Multiplicação: $multiplicacao";
echo "<br>Divisão: $divisao";   
echo "<br>Módulo: $modulo"; // Resultado pode ser inesperado, pois módulo não é comum em floats

echo "<br>";

//Exemplo de round com números decimais
$numero = 10.56789;
$numeroArredondado = round($numero, 1);      
echo "<br><br>Número original: $numero";
echo "<br>Número arredondado: $numeroArredondado"; // Resultado: 10.57

?>