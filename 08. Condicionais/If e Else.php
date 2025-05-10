<?php
// Condicionais no PHP
// Exemplo de if e else


$nome = "João";
$idade = 18;
$altura = 1.75;
$maiorDeIdade = true;


if ($idade >= 18) {
    echo "$nome é maior de idade.";
} else {
    echo "$nome é menor de idade.";
}

$verificaIdade = ($idade >= 18) ? "maior de idade" : "menor de idade";
echo "<br>";            


echo "Qual é a idade de $nome? <br>";
Echo $verificaIdade;

?>