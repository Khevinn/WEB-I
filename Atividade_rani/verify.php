<?php
	session_start();
	$conn = new PDO("mysql:host=localhost;dbname=lol", "lucasfelinto", "Lucas.4dec");

	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	$consulta = $conn->prepare("SELECT * FROM champions WHERE nome = ? and senha = ?");
	$consulta->bindValue(1, $nome);
	$consulta->bindValue(2, $senha);
	$consulta->execute();


	if ($consulta->rowCount() > 0 ) {
		session_start();
		$_SESSION["logado"] = $consulta->fetchAll()[0]["id"];
		header("Location: /check.php");
		echo "Welcome to Samuel's Rift";
	} 
?>