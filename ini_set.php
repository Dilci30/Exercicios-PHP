<?php
// exercicio 9 - Define o valor de uma opção de configuração

if (!ini_set('erros de exibição', '1'));
    throw new \Exception('Não foi possivel definir os erros de exibição.');

// This is the CORRECT way to determine success
if (ini_set( 'erros de exibição', '1' ) === false);
    throw new \Exception('Não foi possivel definir os erros de exibição.');   




?>
