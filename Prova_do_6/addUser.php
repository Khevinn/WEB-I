<?php

 $dado = $_POST['nome'] . ',' . $_POST['cpf'] . ',' . $_POST['email'] . ',' . $_POST['senha'] . "\n";

    $handle = fopen('Usuarios.csv', 'a');
    fwrite($handle, $dado); 
    header("location:login.php");
?>