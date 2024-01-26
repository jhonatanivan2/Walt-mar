<html>
<head>
<meta charset="uft-8"/>
<title>Inicio de sesion</title>
</head>
<body bgcolor="white">

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
             padding: 10px  15px;
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
                           <li><a href="CreacionCuenta.php">Crear una cuenta</a></li>
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
             padding: 10px  15px;
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
<center>
    <img src="Palomita.gif" width="500" height="380">
<h1>

<?php

echo "<font face = arial>";

$Op = $_POST["op"];

$Producto1=$_POST["valor1"];
$Producto2=$_POST["valor2"];
$Producto3=$_POST["valor3"];
$Producto4=$_POST["valor4"];
$Producto5=$_POST["valor5"];

switch ($Op) {
    case '1':
        $op1 = 2398 * $Producto1;

        echo "<h2>Gracias por tu compra</h2><br>";
        echo "</font>";
        echo "<font face = 'arial' color = '#FFC000'>";
        echo "El total de tu compra es: $"."$op1"." <br>";
        echo "</font>";
        break;

    case '2':
        $op2 = 1731.89 * $Producto2;

        echo "<h2>Gracias por tu compra</h2><br>";
        echo "</font>";
        echo "<font face = 'arial' color = '#FFC000'>";
        echo "El total de tu compra es: $"."$op2"." <br>";
        echo "</font>";
        break;

    case '3':
        $op3 = 1745 * $Producto3;

        echo "<h2>Gracias por tu compra</h2><br>";
        echo "</font>";
        echo "<font face = 'arial' color = '#FFC000'>";
        echo "El total de tu compra es: $"."$op3"." <br>";
        echo "</font>";
        break;

    case '4':
        $op4 = 899 * $Producto4;

        echo "<h2>Gracias por tu compra</h2><br>";
        echo "</font>";
        echo "<font face = 'arial' color = '#FFC000'>";
        echo "El total de tu compra es: $"."$op4"." <br>";
        echo "</font>";
        break;

    case '5':
        $op5 = 476.10 * $Producto5;

        echo "<h2>Gracias por tu compra</h2><br>";
        echo "</font>";
        echo "<font face = 'arial' color = '#FFC000'>";
        echo "El total de tu compra es: "."$op5"." <br>";
        echo "</font>";
        break;
    
    default:
        echo"No se ha seleccionado ningun producto";
        break;
}
  
?>
</h1>
</center>
</body>
</html>