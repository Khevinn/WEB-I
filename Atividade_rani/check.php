<?php 
 session_start()
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>Adicione seu campeão</h1>
	<form action="addchampion.php">
		<input type="text" name="nome" placeholder="Nome do campeão">
		<input type="text" name="classe" placeholder="Classe">
		<input type="text" name="cidade" placeholder="Cidade">
		<input type="submit" name="enviar">
	</form>  
</body>
</html>