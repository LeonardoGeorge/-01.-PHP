<?php
 // Manipulando booleanos no PHP
    //$verdadeiro = true; // valor verdadeiro
    //$falso = false; // valor falso

//$verdadeiro = 1; // valor verdadeiro    
//$falso = 0; // valor falso

//echo "O valor verdadeiro é: $verdadeiro <br>";
//echo "O valor falso é: $falso <br>";

// The bug - Inpecionar como o PHP manipula os valores booleanos    
//var_dump($verdadeiro); // Mostra o tipo e valor da variável
//var_dump($falso); // Mostra o tipo e valor da variável


// Exemplo de comparação
$estaEstudando = true;

var_dump($estaEstudando); 

if ($estaEstudando) {
    echo "Você está estudando PHP!";
} else {
    echo "Você não está estudando PHP!";
}

?>