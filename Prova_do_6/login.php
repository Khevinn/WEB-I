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


</style>
</head>

<body>

<header class="menu" >

<a href="index.php">School</a>
<nav>
      
  <li><a href="sair.php" >Inicio</a></li>
  <li><a href="newUSer.php">Cadastrar</a></li>

</nav>

</header>


<section class="form">

      <div class="principal">
	       <h2>Login</h2>
    
          <form action="verificar.php" method="post">

    	  <div class="meio">
           <input type="text" name="email" required=" " >
           <label>Email</label>
           </div> 
    

          <div class="meio">
              <input type="password" name="senha"  required=" " >
              <label>Senha</label>
          </div>    
    
          
         <input type="submit" name="" value="Entrar">
        
        </form>
       
    </div>
	
</section>
 
</body>
</html>