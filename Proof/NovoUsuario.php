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
      <h2>Usuário</h2>
    
      <form action="addUser.php" method="post">

    <div class="meio">
       <input type="text" name="nome" required=" " >
        <label>Nome e sobrenome</label>
    </div> 
    
      <div class="meio">
          <input type="text" name="cpf"  required=" " >
          <label>CPF</label>
       </div>    
       
      <div class="meio">
           <input type="email" name="email"  required=" " >
           <label>Email</label>
      </div>    
    
       <div class="meio">
           <input type="password" name="senha"  required=" " >
           <label>Senha</label>
      </div>    
     
           <input type="submit" name="" value="salvar">
        
        </form>
       
    </div>


	
</section>
 


</body>
</html>