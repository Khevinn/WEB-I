<?php
session_start();

$senha = $_POST['senha'] ?? '' ;
$email = $_POST['email'] ?? '' ;
$cpf = $_POST['cpf'] ?? '';


 $dados = file('Usuarios.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",",TRIM($dados[$i]));
	if ($senha ==  $dados[$i][3] && $email ==  $dados[$i][2]){
		    $_SESSION['autorizado'] = true;
		    $_SESSION['cpf'] = $dados[$i][1];
		   
break;
	}


 }
 header('location: index.php');
 
 ?>


