<?php
// Manipulando strings em PHP


    //Buscando e imprimindo posições de palavras em uma string em uma array!

        $frase = 'O PHP é a linguagem que vai me tirar do buraco!';
        $palavra = 'buraco';
        $posicao = strpos($frase, $palavra);
        $tamanho = strlen($frase);
        $tamanhoPalavra = strlen($palavra);

    //Imprimindo o resultado
        echo "A frase é: $frase <br/>";
        echo "A palavra $palavra está na posição $posicao da frase <br/>";
        echo "O tamanho da frase é: $tamanho <br/>";    
?>