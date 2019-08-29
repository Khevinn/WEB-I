<?php
 		$deuses = "\n" . $_POST['deuses'] . ',' . $_POST['maestria'] . ',' . $_POST['mitologia'];
    $mitologico = fopen('deuses.csv', 'a');
    fwrite($mitologico, $deuses);
    header("location:khevin3.php"); 
?>


