<html>
<head>
<meta charset="uft-8"/>
<title>Inicio de sesion</title>
</head>
<body bgcolor="#F2F2F2">

<style type="text/css">
*{
padding: 0px;
margin: 0px;
}
#header{
margin: auto;
width: 100%;
font-family:Arial, sans-serif;
}
ul, ol {
list-style: none;
}
.nav li a {
background-color: #F2F2F2;
color: black;
text-decoration: none;
padding: 10px 15px;
display: block;
}
.nav li a:hover {
background-color: #D9D9D9;
}
.nav > li {
float: right;
}
.nav li ul {
display: none;
position: absolute;
min-width: 180px;
}
.nav li:hover > ul {
display: block;
}

</style>

<form action="Indexprincipal.php" method="POST">
<div id="header">
<table border="0" bgcolor="#F2F2F2" width="100%">
<tr>
<th width="20%"><a href="indexprincipal.html"><img src="Logo.png" height="55" width="200"></a></th>
<th align="right" width="60%">
</form>
<form action="productos.php" method="POST">
<input type="text" name="buscar" value="" size="100" placeholder="Buscar productos"></li></th>
<th align="center"><input type="image" name="botonbusar" src="lupa.png" alt="Enviar" height="40" width="40"></th> <th align="left"><img src="Carrito.png" height="55" width="72"></th>
<th align="left"><ul class="nav">
<style type="text/css">

 input[name="buscar"]{
font-size: 20spx;
width: 100%;
padding: 10px;
border: none;
}

 </style>

 <li><a href="sesion.php"><img src="Tu cuentaa.png" width="150" height="50"></a>
<ul>
<li><a href="indexwalmart.php">Inicio de sesi&oacute;n</a></li>
<li><a href="CrearCuenta.html">Crear una cuenta</a></li>
</form>
</ul></li>
</ul></th>
</tr>
</table>
</div>

<style type="text/css">

 *{ padding: 0px;
margin:0px;
}

 {
margin:auto;
width: 500px;
font-family: Arial, sans-serif;
}

 ul, ol {

 list-style: none;
}

 .menu li a {
background: #004F9E;
color: white;
text-decoration: none;
padding: 10px 15px;
display: block;
}
.menu li a:hover {
background-color: #1188FF;
}
.menu > li {
float: left;
}
.menu li ul {
display: none;
position: absolute;
min-width: 180px;
}
.menu li:hover > ul {
display: block;
}

</style>

<font face="Arial">
<div>
<ul class="menu">

 <table border="0" bgcolor="#004F9E" width="100%">
<tr>
<th align="left"><li><a href=""><spam class ="primero"><img src="Departamentos.png" width="200" height="40"></spam></a>
<ul>

 <font color="white">
<li><a href="">Tecnolog&iacute;a</a></li>
<li><a href="">Jugueter&iacute;a</a></li>
<li><a href="">Autos y Motos</a></li>
<li><a href="">Productos de higiene y cuidado personal</a></li>
<li><a href="">Mascotas</a></li>
<li><a href="">Abarrotes y limpieza</a></li></font></th>

 </ul>

 <th><font color="#004F9E">hooooolaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaammmmmmmmmmmmmmmmmmmmmmmmmmm</th></font>

 <th align="right"><li><a href=""><spam class ="segundo"><img src="Servicio.png" width="240" height="40"></spam></a>
<ul>

 <h3><li><a>Llama al: 5573894563</a></li></h3></th>
</ul>

 </table>
</ul>

</div>
</font>
</boy>
</html>

<body bgcolor="#FC950C"</body><br>
<center><img src="Usuario.png" width="150" height="150"></center>
<center>

<?php
 session_start();

 if(isset($_SESSION['c_correo'])){

echo"<font face='Arial'>";
echo"<center><h2> Ashley Sierra </center></h2>";
echo"<center><h1> Binvenida </center></h1></font>";
     
   echo"<br>";
   echo"<a href='cerrar_sesion.php'><img src='Candado.png' weidht=100 height=100></a>";
   echo"<br>";
   echo"<font face='arial'>";
   echo"Cerrar sesion";
   echo"</font>";
  
}
else{
   header("location:indexinicio.html"); //te regresa al index para colocar los datos correctamente
}
?>
<table border=0 widht="100%">
<tr>
<th><a href="Consulta.php"><img src="Lupa.png" widht="80" height="80"><br>Consultar ofertas</a></th><th><font color="F2F2F2"> holaaaaaaaaaaa</font></th>
<th><a href="Actualizar.html"><img src="Cargando.png" widht="70" height="80"><br>Actualizar mis datos</a></th><th><font color="F2F2F2">holaaaaaaaaaaaaa</font></th>
<th><a href="Eliminar registro.html"><img src="Basura.png" widht="80" height="80"><br>Eliminar mi cuenta</a></th>
</tr>
</table>
</center>
</body>
</html>