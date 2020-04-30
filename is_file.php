<?php
// exercicio 22 -  Informa se o arquivo é um arquivo comum

$file = "test.txt";
if(is_file($file)) {
  echo ("$file é um arquivo regular");
} else {
  echo ("$file não é um arquivo regular");
}
?>