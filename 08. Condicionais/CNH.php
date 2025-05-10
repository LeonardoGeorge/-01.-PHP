<?php 
// Operadores lógicos
// Verifica se o usuario tem CNH

 $idade = 18;
 $temCNH = true;


    if ($idade >= 18 && $temCNH) {
        echo "Você pode dirigir no Brasil!";
    } else {
        echo "Você não pode dirigir no Brasil!";
    }
?>