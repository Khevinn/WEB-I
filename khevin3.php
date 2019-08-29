<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet">
   
</head>
<body>
  <style>
  

    body{
      display: flex;
      /*justify-content: center;*/
      /*align-items: center;*/
      min-height: 100vh;
    }
  table{text-align:center;
        font-size: 150%; 
        width:80%;
}
  tr:nth-child(odd){
    background:#B6E3F3;
}
  tr:nth-child(even){
    background:#09BC13;
    
  </style>

  
<?php
    $deuses = file('deuses.csv');
    for($i = 0; $i < sizeof($deuses); $i++) {
        $deuses[$i] = explode(",", $deuses[$i]);
    }
?>
  <table>
  <tr>
    <th>Deuses</th>
    <th>Maestria</th>
    <th>Mitologia</th>
  </tr>
   <?php foreach($deuses as $deus):?>
    <tr>
    <?php foreach($deus as $deus3):?>
      <td><?= $deus3?></td>
  <?php endforeach?>
    </tr>
    <?php endforeach?>
  </table>
  <form action="functions3.php" method="POST">
      <legend><strong>Cadastro dos Deuses:</strong></legend>
        <input type="text"  name="deuses" placeholder="Deuses">
        <input type="text"  name="maestria" placeholder="Maestria">
        <input type="text" name="mitologia" placeholder="Mitologia">
      <input type="submit" value="Cadastrar">
  </form>



</body>

</html>
