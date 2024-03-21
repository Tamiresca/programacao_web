<?php
$cpf = $_POST ['cpf'];
$indice_cpf = 0;
for($i = 10; $i >= 2; $i--){
    print ($cpf[$indice_cpf]* $i ). ' ';
    $indice_cpf++;
}
    ?>