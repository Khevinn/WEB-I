
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
/*    body{
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
    background:green;
}

  tr:nth-child(even){
    background:blue;

*/    
  </style>
</head>
<body>
  <?php

  $dados = [
    'Zelda,35,Bhutan',
    'Dorene,26,Tajikistan',
    'Myrna,23,Armenia'
  ];
  $linha0 = explode(',', $dados[0]);
  print_r($linha0);

?>
  <table>
  <tr>
    <th>Jogo</th>
    <th>Plataforma</th>
    <th>Ano de Lançamento</th>
  </tr>
    <?php foreach ($games as $perfect): ?>
      <tr>
        <?php foreach ($perfect as  $gamer): ?>
          <td><?php echo "$gamer"; ?></td>
        <?php endforeach ?>
      </tr>
      <?php endforeach ?>
  </table>
  
</body>
</html>
