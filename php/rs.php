<?php
include 'conexion.php';

$user = $_POST['User'];
$correo = $_POST['Email'];
$pass = $_POST['Contra1'];
$sql = "INSERT INTO user(Usuario,Contrasena,correo) VALUES ('$user','$pass','$correo')" ;
$result= mysqli_query($conexio,$sql);
if($result){ echo '<script> alert("Se reginstro correctamente el usuario"); window.location="../php/usuarios.php"; </script>';}
