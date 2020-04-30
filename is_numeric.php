<?php
// exercicio 25 -  Informa se a variável é um número ou uma string numérica

$a = "bala";
if (is_numeric($a)){
    echo $a." é numerico";
 } else {
        echo $a." não é numerico" ."<br>";
        } 
   
    $b = 50;
    if (is_numeric($b)){
        echo $b." é numerico";
     } else {
        echo $b." não é numerico" ."<br>";
        }
       
$c = 32.5;
if (is_numeric($c)){
    echo $c." é numerico";
 } else {
    echo $c." não é numerico" . "<br>";
    }

$d = "verdadeiro";
if (is_numeric($d)){
    echo $d." é numerico";
 } else {
        echo $d." não é numerico". "<br>"; 
    }

$f = "falso";
if (is_numeric($f)){
    echo $f." é numerico";
 } else {
    echo $f." não é numerico" ."<br>";
 }

$exemp = is_numeric ('58635272821786587286382824657568871098287278276543219876543') ? true : false;
   
    var_dump ($exemp); "<br>";

           ?>