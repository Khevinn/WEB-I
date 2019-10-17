<?php
session_start();

$autorizado = $_SESSION['autorizado'] ?? false;
if ($autorizado !== true) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>

<body>

<header class="menu" >

<a href="index.php">School</a>
<nav>
      
  <li><a href="sair.php" >Inicio</a></li>
<!--   <li><a href="#">Entrar</a></li>
 -->  <li><a href="newUser.php">Cadastrar</a></li>
</nav>

</header>


<section class="form">


      <div class="principal">
         <h2>Cursos</h2>
    
          <form action="addCursos.php" method="post">

        <div class="meio">
           <input type="text" name="cursos" required="">
           <label>Cursos</label>
           </div> 
    
       <input type="submit" name="" value="salvar">
        
        </form>
       
    </div>

</section>

<section class="formulario"> 
 <?php
 $dados = file('cursos.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",", TRIM($dados[$i]));
 }
 ?>

 <table class="tabela" >
 
 <tr>
 <th>Cursos</th>
 </tr>
 
 
 <?php foreach ($dados as $i => $dadosUser): ?>
<tr>
 <?php foreach ($dadosUser as  $dados): ?>
 
 
 <td><?= $dados ?></td>
 
 <?php endforeach ?>
 <td><a id="apg" href="delCursos.php?id=<?= $i ?>">X</a></td>
 </tr>
 <?php endforeach ?>
 </table>
 
 </section>



</body>
</html>