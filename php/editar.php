<?php
include 'conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE Id='$id'";
$result=mysqli_query($conexio,$sql);
if(mysqli_num_rows($result)==1){ $row=mysqli_fetch_array($result);} 

if(isset($_POST['update'])){

    $id1=$_GET['id'];
    $user=$_POST['User'];
    $Contra1=$_POST['Contra1'];
    $correo=$_POST['Email'];
    $sql1="UPDATE user set Usuario='$user', Correo='$correo', Contrasena='$Contra1' WHERE Id='$id1'";
    mysqli_query($conexio,$sql1);
    echo ' <script> alert("Se a actualizado correctamente el usuario");</script>';  
    header("Location: usuarios.php");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Actualizar datos</title>
    
</head>
<body>
    

<div class="p">
    
    <div class="row">
      
        <div class="card " style="background-color:#248bc7; border:solid #000;">
            <div class=card-header>
                <h3>Actualizar</h3>
            </div>
            <div class=card-body>
                <form method="POST" action="editar.php?id=<?php echo $_GET['id']; ?>">
                    <div class="form-group">
                        <label for="User">Usuario</label>
                        <input type="text" id="User" name="User" required value="<?php echo $row['Usuario']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="Email">Correo</label>
                        <input type="Email" id="Email" name="Email" required class="form-control" value="<?php echo $row['correo']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="Contra1">Contraseña</label>
                        <input type="password" id="Contra1" name="Contra1" required class="form-control" value="<?php echo $row['Contrasena']; ?>">

                    </div>  
                    <div class="form-group">
                        <label for="Contra2">Contraseña</label>
                        <input type="password" id="Contra2" name="Contra2" class="form-control" required>
                        <input type="button" id="btnSubmit" value="Submit" onclick="return Validate()" >

                    </div>                        
                   <button name="update"; >Actualizar datos</button>
                   <a class="btn btn-info btn-sm float-right" href="usuarios.php">Regresar</a>
                </form>
            </div>
          

        </div>
    </div>

   </div>
   <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("Contra1").value;
        var confirmPassword = document.getElementById("Contra2").value;
        if (password != confirmPassword) {
            alert("Contraseña no coincide");
            return false;
        }
        else{ 
            alert("Contraseñas coinciden");
        }
        return true;
        
    }
    </script>
   </body>
   </html>