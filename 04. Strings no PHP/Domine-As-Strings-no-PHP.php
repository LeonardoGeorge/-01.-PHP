<?php
//Exemplo de string simples
$texto = 'O PHP é a linguagem que vai me tirar do buraco!';

// Strlen: conta o número de caracteres na string.
$numeroCaracteres = strlen($texto);

//Strpos: encontra a posição de uma substring dentro de uma string.
$posicaoPalavraBuraco = strpos($texto, 'buraco');
$posicaoPalavraPHP = strpos($texto, 'PHP');


//Imprindindo o resultado
echo "A frase é: $texto <br/>";
echo "A palavra 'buraco' está na posição $posicaoPalavraBuraco da frase <br/>";
echo "A palavra 'PHP' está na posição $posicaoPalavraPHP da frase <br/>";
?>