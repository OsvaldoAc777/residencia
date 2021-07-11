<?php 
include 'conexion.php';
   
$user = $_POST['User'];
$pass = $_POST['Contra'];
$query ="select * from user where Usuario='$user' and Contrasena='$pass'";

$sql = mysqli_query($conexio, $query) or die(mysqli_error($conexio)); 

if (mysqli_num_rows($sql)>0) {
   
    header("location: ../php/usuarios.php");
exit;
}
else {
    echo ' <script> alert("Usuario no existente, porfavor verifique los datos ingresados"); window.location="../Index.php";</script>' ;
exit;
}
