


<?php
  // - Toda a variavel em PHP começa com o simbolo $.
  // - As variaveis podem conter:
  // -- Letras
  // -- Numeros 
  // -- Simbolo de underscore (_).
  // -- As variaveis não podem começar com numeros.
  // -- As variaveis são case-sensitive, ou seja: 
  //  --$nome e $Nome são variaveis diferentes.


    $feitoPor = "Feito por";
    $primeiroNome = "Leonardo";
    $segundoNome = "George";
    $nomeCompleto = $primeiroNome . " " . $segundoNome; // Concatenando variaveis
   
    // This is a simple PHP script that outputs "Hello World!" to the browser
    echo "<h1>Helo World!</h1> <br/>";
    echo $feitoPor;
    echo $nomeCompleto
?>