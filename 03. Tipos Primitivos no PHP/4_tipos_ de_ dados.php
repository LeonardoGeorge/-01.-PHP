<?php
    /*
    Tipos de dados em PHP
        - Inteiros (int)
        - Flutuantes (float)
        - Strings (string)
        - Booleanos (bool)
        - Arrays (array)
        - Objetos (object)
        - Nulo (null)
        - Recursos (resource)
    */

    // Exemplo de inteiro
        $numeroInteiro = 42; // Número inteiro  
    // Exemplo de flutuante
        $numeroFlutuante = 3.14; // Número flutuante        
    // Exemplo de string
        $texto = "Olá, mundo!"; // Texto (string)   
    // Exemplo de booleano
        $verdadeiro = true; // Valor booleano verdadeiro    
        $falso = false; // Valor booleano falso
    // Exemplo de array
        $array = array(1, 2, 3, 4, 5); // Array com números
        $arrayAssociativo = array("chave1" => "valor1", "chave2" => "valor2"); // Array associativo     
    // Exemplo de objeto
        class Carro {
            public $marca;
            public $modelo;
            
            public function __construct($marca, $modelo) {
                $this->marca = $marca;
                $this->modelo = $modelo;
            }
        }
        
        $carro = new Carro("Fusca", "Volkswagen"); // Objeto da classe Carro
    // Exemplo de nulo
        $variavelNula = null; // Variável nula (sem valor)
    // Exemplo de recurso
        $arquivo = fopen("exemplo.txt", "r"); // Recurso de arquivo (handle)
        fclose($arquivo); // Fecha o recurso do arquivo    
?>