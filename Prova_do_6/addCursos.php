<?php

 $dado = $_POST['cursos'] . "\n";

    $handle = fopen('cursos.csv', 'a');
    fwrite($handle, $dado); 
    header("location:cadastroAtributos.php");
?>