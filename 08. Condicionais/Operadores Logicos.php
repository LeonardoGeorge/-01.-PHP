<?php
// Operadores Lógicos no PHP
// Exemplo de operadores lógicos AND, OR e NOT
$idade = 18;        
$altura = 1.75;
$maiorDeIdade = true;   
$menorDeIdade = false;
$maiorDeIdadeEAltura = ($idade >= 18) && ($altura >= 1.70);
$menorDeIdadeOuAltura = ($idade < 18) || ($altura < 1.70);
$naoMaiorDeIdade = !$maiorDeIdade;  
$naoMenorDeIdade = !$menorDeIdade;
echo "<br>";        

echo "A idade é maior ou igual a 18 e a altura é maior ou igual a 1.70? <br>";
echo $maiorDeIdadeEAltura ? "Sim" : "Não";


echo "<br>";
echo "<br>";

// Exemplo de operadores logicos com if e else
if ($maiorDeIdadeEAltura) {
    echo "<br>";
    echo "A pessoa é maior de idade e tem altura maior ou igual a 1.70.";
} else {
    echo "<br>";
    echo "A pessoa não é maior de idade ou não tem altura maior ou igual a 1.70.";
}
echo "<br>";
echo "A idade é menor que 18 ou a altura é menor que 1.70? <br>";
echo $menorDeIdadeOuAltura ? "Sim" : "Não";

?>