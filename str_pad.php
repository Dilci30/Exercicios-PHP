<?php
// exercicio 17 - Preenche uma string para um certo tamanho com outra string

$input = "Exercicios"; 
print str_pad($input, 10);                  // produz "Exercicios    
print str_pad($input, 20, "-=", STR_PAD_LEFT);  // produz "-=-=-Exercicios"
print str_pad($input, 15, "_", STR_PAD_BOTH);   // produz "__Exercicios___"
print str_pad($input, 8 , "___");               // produces "Exercicios_"
?>
