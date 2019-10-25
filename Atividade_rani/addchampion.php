<?php
	$conn = new PDO("mysql:host=localhost;dbname=lol", "lucasfelinto", "Lucas.4dec");

	$nome 	= $_POST["nome"];			
	$classe 	= $_POST["classe"];
	$cidade = $_POST["cidade"];

 		$consulta = $conn->prepare("INSERT INTO livro (nome, classe, cidade) VALUES (:nome, :classe, :cidade)");
		$consulta->bindValue(":nome", $nome);
		$consulta->bindValue(":classe", $classe);
		$consulta->bindValue(":cidade", $cidade);
		$consulta->execute();

		header('location:check.php?msg=adicionado com sucesso');
?>