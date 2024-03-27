<?php
$n = $_POST['nome'];
$e = $_POST['email'];
$s = $_POST['senha']; 
$sep = '$%&%$';
if (file_exists('clientes.txt')){
    $linha = $n . $sep . $e . $sep . $s . "\n";
}else{
    $linha = $n . $sep . $e . $sep . $s . "\n";
}



 $clientes = fopen('clientes.txt' , 'a+');
 fwrite($clientes, $linha );
 fclose($clientes);

?>