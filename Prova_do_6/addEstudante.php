<?php
session_start();

 $dado = $_POST['nome'] . ',' . $_POST['cidade'] . ',' . $_POST['matricula'] . ',' . $_POST['email'] .  ',' . $_SESSION['cpf'] . ',' . $_POST['time'] . "\n";


    $handle = fopen('estudantes.csv', 'a');
    fwrite($handle, $dado); 
    header("location:index.php");
?>