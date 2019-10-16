<!DOCTYPE html>
<html>
<head>
	<title></title>

 </head>

<body>

  <header class="menu" >

  <a href="inicio.php">SCHOOL</a>
  
<nav>   
  <li><a href="sair.php">Inicio</a></li>
  <li><a href="#" >Cadastro</a></li>
  <li><a href="NovoUsuario.php">Login</a></li>
</nav>

  </header>
 
 <section class="form">

   <div class="principal">
	   <h2>Login</h2>
    
      <form action="autentication.php" method="post">

    	<div class="meio">
        <input type="text" name="email" required="">
        <label>Email</label>
      </div> 
    
      <div class="meio">
          <input type="password" name="senha" required="">
          <label>Senha</label>
      </div>    
        <input type="submit" name="" value="Entrar">
          </form>
       </div>
</section>
 
</body>
</html>