<?php

	$table = $_GET['id'];//pega os  dados via get(URL)
	$file = file('Estudantes.csv');//lê todo o arquivo

unset($file[$table]);//apaga uma linha da tabela;

  $dados = "";

 foreach($file as $key){
$dados = $dados . $key;

}

	$open = fopen('Estudantes.csv',"w");
fwrite($open,$dados);

header("location:index.php");
?>