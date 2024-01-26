<htlm>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "walmart";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Fallo la conexion: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuario (Nombre, Apellido_paterno, Telefono, Correo, Contrasena, Confirmar_contrasena)
VALUES('STEVEN', 'STRANGE ', '55456789', 'DRSETEVENSTRANGE@HOTMAIL.COM', 'drstrange','drstrange')";

if (mysqli_query($conn, $sql)) {
 echo "El registro se agrego correctamente";
} else {
  echo "Error:No se pudo agregar el registro " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<a href="registro.html" target="_self">Regresar</a>

</body>
</html>