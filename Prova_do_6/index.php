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

<style type="text/css">

*{
margin:0;
padding:0;
font-size: 100%;
box-sizing: border-box;
font-family: ;
}

.container{
display:flex;
flex-direction:row;
flex-wrap:nowrap;
justify-content:center;
align-items:center;
background: red;
width:100%;
height:400px;
background-size:cover;
background-clip: content-box;
background-size: cover;
background-position: center;
border-bottom-right-radius:20%;
}

p{
display:flex;
font-size:30px;
border:1px solid red;
height:50px;
justify-content:center;
margin-top:20px;
background:rgba(0,0,0,0.5);
color:white;
text-align:center;

}

.menu{
display:flex;
flex-direction:row;
flex-wrap:nowrap;
justify-content:space-between;
align-items:center;
background: darkblue;

width:100%;
height:70px;
}

nav a,li{
text-decoration:none;
font-size:20px;
color:white;
list-style:none;
padding:10px;


}

a{
text-decoration:none;
font-size:20px;
color:white;
list-style:none;
padding:10px;


}

nav{
display:flex;
}

li{
text-decoration:none;
}

/**/
.principal{
position: absolute;
top:50%;
left:50%;
margin-top: 100px;
margin-bottom: 100px;
transform:translate(-50%,-50%);
width:400px;
padding:40px;
background: rgba(0,0,0,.8);
box-sizing: border-box;
box-shadow:0 15px 25px rgba(0,0,0,.5);
border-radius:10px;
}

.principal h2{
margin:0 0 30px;
padding:0;
color:#fff;
text-align: center;
}

.principal .meio{
position: relative;
}

.principal .meio input{
width:100%;
padding:10px 0;
font-size:16px;
color:#fff;
letter-spacing:1px;
margin-bottom:30px;
border:none;
border-bottom:1px solid;
outline:none;
background: transparent;
}

.principal .meio label{
position: absolute;
top:0;
left:0;
padding:10px 0;
font-size:16px;
color:#fff;
pointer-events: none;
transition: .5s;
}

.principal .meio input:focus~label,
.principal .meio input:valid~label
{
top:-18px;
left:0;
color:#03a9f4;
font-size:12px;
}


.principal input[type="submit"]{
background: transparent;
border: none;
outline: none;
color:#fff;
background:#03a9f4;
padding:10px 20px;
cursor: pointer;
border-radius:10px;
}

.form{
display: flex;
width: 100%;
height: 900px;
background:grey;
}



.formulario{
display:flex;
border:2px solid black;
margin-top:30px;
height:800px;
width:100%;
flex-direction:row;
justify-content:flex-start;
align-items:center;
}

.cadastro{
display:flex;
width:300px;
height:200px;
background:darkcyan;
color:white;
text-align:center;
font-size:20px;
text-decoration:none;
margin:10px;
justify-content:center;
align-items:center;
}


th{
color:black;
font-size:25px;
padding: 16px;
border-bottom: 1px solid black;
}
     
#t2{
color:white;
font-size:25px;
text-align:center;
}

.tabela{
display:flex;
border-collapse:collapse;
font-family:arial,sans-serif;
margin: 0 auto;
justify-content:flex-start
}

td{
text-align:center;
padding:16px;
font-size:25px;
color:black;
border-bottom: 1px solid black;
}

tr{
text-align:center;
padding:15px;
font-size:25px;
color:black;
}
     
#apg{
color:black;
font-size:10px;
text-decoration:none;
}

select{
width:320px;
height:40px;

}

</style>
</head>

<body>

<header class="menu" >

<a href="index.php">School</a>
<nav>
      
  <li><a href="sair.php" >Inicio</a></li>
  <li><a href="newUser.php">Cadastrar</a></li>
</nav>

</header>

  <?php
      $estu = file('cursos.csv');
       foreach($estu as $id => $cursos){
        $estu[$id] = explode(',', $cursos);
         }

       ?>
<section class="form">


      <div class="principal">
         <h2>Estudantes</h2>
    
          <form action="addEstudante.php" method="post">

        <div class="meio">
           <input type="text" name="nome" required=" " >
           <label>Primeiro e segundo nome</label>
           </div> 
    

          <div class="meio">
              <input type="text" name="cidade"  required=" " >
              <label>Cidade</label>
           </div>    
           
           <div class="meio">
              <input type="number" name="matricula"  required=" " >
              <label>Matrícula</label>
          </div>    


 <select name="time">
         <?php foreach ($estu as $cursos): ?>
              <?php list($t) = $cursos; ?>
                <option value="<?= $t ?>">  &#43;<?= $t?></option>
            <?php endforeach ?>
       </select>

          <div class="meio">
              <input type="email" name="email"  required=" " >
              <label>Email</label>
          </div>    
  
        
         <input type="submit" name="" value="salvar">
        
        </form>
       
    </div>
  
</section>

<section class="formulario"> 
 <?php
 $dados = file('estudantes.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",", TRIM($dados[$i]));
 }
 ?>
 

 <table class="tabela" >
 
 <tr>
 <th>Nome</th>
 <th>Cidade</th>
 <th>Matrícula</th>
 <th>Email</th>
 <th>Id</th>
 <th>Cursos</th>

 </tr>
 
 
 <?php foreach ($dados as $i => $dadosUser): ?>
<?php if($dadosUser[4] == $_SESSION['cpf']):?>
 <tr>
 <?php foreach ($dadosUser as  $dados): ?>
 
 
 <td><?= $dados ?></td>
 
 <?php endforeach ?>
 <td><a id="apg" href="delEstudantes.php?id=<?= $i ?>">X</a></td>
 </tr>
<?php endif ?>
 <?php endforeach ?>
 </table>
 
 </section>



</body>
</html>