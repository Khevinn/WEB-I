<?php
session_start();

 $estudante = $_POST['nome'] . ',' . $_POST['cidade'] . ',' . $_POST['escola'] . ',' . $_POST['email'] . ',' . $_SESSION['cpf'] . "\n";

    $handle = fopen('Estudantes.csv', 'a');
    fwrite($handle, $estudante); 
    header("location:index.php");
?>