<?php
session_start();

$autorizado = $_SESSION['autorizado'] ?? false;
if ($autorizado !== true) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>

</head>
<body>

  <header class="menu" >

<a href="inicio.php">SCHOOL</a>
 
  <nav>  
  <li><a href="sair.php">Inicio</a></li>
  <li><a href="#">Cadastro</a></li>
  <li><a href="NovoUsuario.php">Login</a></li>
  </nav>

</header>



<section class="form">

  <div class="principal">
      <h2>Estudante</h2>
    
      <form action="addEstudantes.php" method="post">

    <div class="meio">
        <input type="text" name="nome" required="">
        <label>Nome e sobrenome</label>
        </div> 
        
    <div class="meio">
          <input type="text" name="cidade"  required="">
          <label>Cidade</label>
          </div>    
           
       <div class="meio">
          <input type="text" name="escola"  required="">
          <label>Escola</label>
          </div>    

      <div class="meio">
           <input type="email" name="email"  required="">
          <label>Email</label>
           </div>    
    
      <input type="submit" name="" value="salvar">
        
    </form>
       
</div>


  
</section>

    <section class="formulario"> 
   <?php
   $dados = file('Estudantes.csv');
  for($i = 0; $i < sizeof($dados); $i++) {
   $dados[$i] = explode(",", TRIM($dados[$i]));
  }
 
 ?>
   
  <table class="tabela">
      <tr>
    <th>Nome</th>
    <th>Cidade</th>
    <th>Escola</th>
    <th>Email</th>
      </tr>
 
  <?php foreach ($dados as $i => $user): ?>
    <?php if($user[4] == $_SESSION['cpf']):?>
   <tr>
    <?php foreach ($user as  $dados): ?>
    <td><?= $dados ?></td>
 
    <?php endforeach ?>
     
      <td><a id="apg" href="deletarEstudante.php?id=<?= $i ?>">X</a></td>
       </tr>
    <?php endif ?>
    <?php endforeach ?>
    </table>
 
</section>

</body>
</html>