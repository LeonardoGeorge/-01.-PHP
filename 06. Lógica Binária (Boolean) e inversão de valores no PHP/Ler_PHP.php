<?php
// Exemplo de comparação
$estaEstudando = true;


var_dump($estaEstudando); 

$estaEstudando = !$estaEstudando; // Inverte o valor da variável

var_dump($estaEstudando); // Mostra o valor invertido

/* O PHP sempre lê o valor como verdadeiro ou falso em seu contexto semântico
sempre de cima para baixo, ou seja, o valor da variável $estaEstudando é lido como verdadeiro
e o valor da variável $estaEstudando = !$estaEstudando; é lido como falso.
*/
?>