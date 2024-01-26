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
<li><a href="Tecnologia.html">Tecnolog&iacute;a</a></li>
<li><a href="Jugueteria.html">Jugueter&iacute;a</a></li>
<li><a href="Autos y motos.html">Autos y Motos</a></li>
<li><a href="Higiene.html">Productos de higiene y cuidado personal</a></li>
<li><a href="Mascotas.html">Mascotas</a></li>
<li><a href="Abarrotes.html">Abarrotes y limpieza</a></li></font></th>

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

<font face="arial"><br><br><br>
<center><h1> Consulta de ofertas </center></h1><br><br>
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "walmart";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die("Error con la
conexion");

$consulta = mysqli_query($conexion, "SELECT * from descuentos") or die ("Error al consultar
registros");

echo "<center><table border='5'>";
echo "<tr>";
echo "<th id='productos'> Productos </th>";
echo "<th id='precio original'> Precio original </th>";
echo "<th id='precio con descuento'> Precio con descuento </th>";
echo "<th id='ahorras'> Ahorras </th>";
echo "</tr>";

while ($extraido = mysqli_fetch_array($consulta))
{
echo "<tr>";
echo "<td>".$extraido["Productos"]."</td>";
echo "<td>".$extraido["Precio original"]."</td>";
echo "<td>".$extraido["Precio con descuento"]."</td>";
echo "<td>".$extraido["Ahorras"]."</td>";
echo "</tr>";

}

mysqli_close($conexion);
echo "</table>";
?>
<br><br>
<a href="sesion.php" target="_self">Regresar</a>
</font>
</boy>
</html>

