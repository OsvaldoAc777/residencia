<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" 
    integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

    <div class="container">
    <div class="float-right"> <a class="btn btn-info btn-sm float-right" href="registro.php"><i class="bi bi-plus-lg"> </i></a> 
    <a href="../Index.php">Salir</a>
   </div>
<table class="table">
    <thead>

        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Opciones</th>
           
        </tr>
    </thead>
    <tbody>
    <?php
    include 'conexion.php';
    $sql="SELECT * FROM user";
    $resultado=mysqli_query($conexio,$sql);
while($row=mysqli_fetch_array($resultado)){

    ?>
    
    <tr>
        <td><?php echo $row['Usuario'];?> </td>
        <td><?php echo $row['correo'];?></td>
        <td><?php echo $row['Contrasena'];?></td>
        <td><a href="editar.php?id=<?php echo $row['Id']?>"> <i class="bi bi-pencil-square"></i>  </a> 
        <a href="eliminar.php?id=<?php echo $row['Id']?>"> <i class="bi bi-trash"></i> </a> </td>
        
    </tr>
    <?php }?>

    </tbody>
</table>
</div>

</body>
</html>