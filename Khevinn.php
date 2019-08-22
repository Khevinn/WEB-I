
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
  table{text-align:center;
        font-size: 150%; 
        width:80%;

}

  tr:nth-child(odd){
    background:#b2fcff;
}

  tr:nth-child(even){
    background:#9cf196;

    
  </style>
</head>
<body>
      
 <?php
  $linhas = file('file.csv');
  for($i = 0; $i < sizeof($linhas); $i++){

   $linhas[$i] = explode(',',$linhas[$i]);   
}

 ?>
  <table class="tabela">

  <tr>
    <th>Nome</th>
    <th>Idade</th>
    <th>Ano</th>
  </tr>
    <?php foreach ($linhas as $tabela): ?>
      <tr>
        <?php foreach ($tabela as  $linha): ?>
         <td><?php echo "$linha"; ?></td>
        <?php endforeach ?>
      </tr>
      <?php endforeach ?>
  </table>
  
</body>
</html>
