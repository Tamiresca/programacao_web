<?php
$nome =$_POST["nome"];
$nome =$_POST["nome"];

if ($idade > = 0 and $idade < 13){
    print $nome . "é uma criança";
} else {
    if($idade < 18){
        print $nome . "é uma adolescente";
    } else {
        if ($idade < 60){
            print $nome . "é uma adulto";
        }else{
            print $nome . "é uma idoso";
        }
        }
    }
    
