<?php
include 'conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM user where Id='$id'";
$result=mysqli_query($conexio,$sql);
if($result) { echo '<script> alert("Se a borrado el usuario correctamente");</script>'; header("location: usuarios.php");}