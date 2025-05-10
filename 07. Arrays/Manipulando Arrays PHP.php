<?php
$supermercado = array(
    "frutas" => array(
        "banana" => 1.50,
        "maçã" => 2.00,
        "laranja" => 1.80
    ),
    "verduras" => array(
        "alface" => 0.80,
        "tomate" => 1.20,
        "cenoura" => 0.90
    ),
    "laticínios" => array(
        "leite" => 3.00,
        "manteiga" => 4.00,
        "queijo" => 5.00,
        "iogurte" => 2.50
    )
);

// Exibindo o array multidimensional
echo '<pre>';   
var_dump($supermercado); // Exibe o array multidimensional completo
echo '</pre>';


echo "<br>";
echo "A nova lista de compras do supermercado é: <br>";

// Exemplo de como adicionar um novo item ao array
$supermercado["frutas"]["uva"] = 2.50;

// Exibindo o array atualizado
echo '<pre>';
var_dump($supermercado); // Exibe o array atualizado    
echo '</pre>';

?>