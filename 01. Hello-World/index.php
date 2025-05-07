<?php

  // - Toda variável em PHP começa com o símbolo $.
  // - As variáveis podem conter:
  // -- Letras
  // -- Números 
  // -- Símbolo de underscore (_).
  // -- As variáveis não podem começar com números.
  // -- As variáveis são case-sensitive, ou seja: 
  //  -- $nome e $Nome são variáveis diferentes.

  $feitoPor = "Feito por";
  $primeiroNome = "Leonardo";
  $segundoNome = "George";
  $nomeCompleto = $primeiroNome . " " . $segundoNome; 
   
  // Este é um script PHP simples que exibe "Hello World!" no navegador
  echo "<h1>Hello World!</h1> <br/>";
  echo $feitoPor . " ";
  echo $nomeCompleto;
?>