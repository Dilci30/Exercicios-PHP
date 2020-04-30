<?php
//exercicio 15 - Diz se o caminho é um diretório

$file = "images";
if(is_dir($file)) {
  echo ("$file é um diretorio");
} else {
  echo ("$file não é um diretorio");
}
?>