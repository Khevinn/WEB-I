<?php
	$conn = new PDO("mysql:host=localhost;dbname=lol", "lucasfelinto", "Lucas.4dec");

	$nome 	= $_POST["nome"];			
	$email 	= $_POST["email"];
	$confemail = $_POST["confemail"];
	$senha 	= $_POST["senha"];
	$confsenha = $_POST["confsenha"];

	if ($email == $confemail && $senha == $confsenha) {
 		$consulta = $conn->prepare("INSERT INTO usuario (email,nome, senha) VALUES (:email, :nome, :senha)");
		$consulta->bindValue(":email", $email);
		$consulta->bindValue(":nome", $nome);
		$consulta->bindValue(":senha", md5($senha));
		$consulta->execute();
	}
 
	header('location:login.php?msg=cadastrado com sucesso');

	?>