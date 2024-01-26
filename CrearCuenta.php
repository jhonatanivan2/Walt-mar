<htlm>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "walmart";

$Nombre=$_POST["nom"];
$Apellido=$_POST["ape"];
$Telefono=$_POST["tel"];
$Correo=$_POST["cor"];
$Contraseña=$_POST["contra"];
$Confirmar=$_POST["conf"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Fallo la conexion: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuario (Nombre, Apellido_paterno, Telefono, Correo, Contrasena, Confirmar_contrasena)
VALUES('$Nombre', '$Apellido', '$Telefono', '$Correo', '$Contraseña', '$Confirmar')";

if (mysqli_query($conn, $sql)) {
 echo "El registro se agrego correctamente";
} else {
  echo "Error:No se pudo agregar el registro " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<a href="indexwalmart.php" target="_self">Regresar</a>

</body>
</html>