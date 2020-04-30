<?php
//exercicio 14 - remove um diretorio 


if (!file_exists('php/exercicios')) {
       rmdir('php/exercicios', 0777, true);
   }
   
?>