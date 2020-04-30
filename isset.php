<?php
//exercicio 10 - Informa se a variável foi iniciada

$a = 0;
// True porque $a esta definido
if (isset($a)) {
  echo "Variavel 'a' esta definida .<br>";
}

$b = null;
// False porque $b é nulo
if (isset($b)) {
  echo "Variavel'b' esta definida .";
}
?>