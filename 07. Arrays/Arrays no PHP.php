<?php
// Manipulando Arrays no PHP
// Criando um array
$nomes = array("João", "Maria", "José", "Ana", "Pedro");

// Exibindo o array
/*
echo $nomes[0];
echo "<br>";        
echo $nomes[2]; 
*/


echo "<br>";
// Exemplo de array com numeros
$idades = array(35, 21, 34, 41, 62);


// Exibindo o array
/*
echo $idades[0];
echo "<br>";
echo $idades[2];
*/

// Exenplo de array associativo
$idadesPessoas = array(
    "joão" => 35,   
    "maria" => 21,
    "jose" => 34,       
    "ana" => 41,
    "pedro" => 62   
    
);

echo "<br>";
// Exibindo o array associativo
echo"João tem ".$idadesPessoas["joão"]." anos";
echo "<br>";            
echo"Ana tem ".$idadesPessoas["ana"]." anos";

echo "<br>";
echo '<pre>';
var_dump($idadesPessoas); // Exibe o array associativo completo
echo '</pre>';


// Exemplo de array multidimensional
$alunos = array(
    "joão" => array(
        "idade" => 35,
        "cidade" => "São Paulo"
    ),
    "maria" => array(
        "idade" => 21,
        "cidade" => "Rio de Janeiro"
    ),
    "jose" => array(
        "idade" => 34,
        "cidade" => "Belo Horizonte"
    )
);

//Exibir o array multidimensional
echo "<br>";    
echo '<pre>';
var_dump($alunos); // Exibe o array multidimensional completo
echo '</pre>';

echo "<br>";
// Exibindo o nome e a cidade de cada aluno
foreach ($alunos as $nome => $dados) {
    echo "$nome tem ".$dados["idade"]." anos e mora em ".$dados["cidade"]."<br>";
}


?>