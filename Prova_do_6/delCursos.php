<?php
$tabela = $_GET['id'];//pega os  dados via get(URL)
$arquivo = file('cursos.csv');//lê todo o arquivo

unset($arquivo[$tabela]);//apaga uma linha da tabela;

$dado = "";

foreach($arquivo as $key){
$dado = $dado . $key;

}

$abri = fopen('cursos.csv',"w");
fwrite($abri,$dado);

header("location:cadastrarAtributos.php");
?>