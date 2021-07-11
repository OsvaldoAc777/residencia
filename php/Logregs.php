<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Registro</title>
    
</head>
<body>
   <div class="p">
    
    <div class="row">
      
        <div class="card " style="background-color:#248bc7; border:solid #000;">
            <div class=card-header>
                <h3>Registro</h3>
            </div>
            <div class=card-body>
                <form method="POST" action="rs2.php">
                    <div class="form-group">
                        <label for="User">Usuario</label>
                        <input type="text" id="User" name="User" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="Email">Correo</label>
                        <input type="Email" id="Email" name="Email" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label for="Contra1">Contraseña</label>
                        <input type="password" id="Contra1" name="Contra1" class="form-control" required>

                    </div>  
                    <div class="form-group">
                        <label for="Contra2">Contraseña</label>
                        <input type="password" id="Contra2" name="Contra2" class="form-control" required>
                        <input type="button" id="btnSubmit" value="Submit" onclick="return Validate()" >

                    </div>                        
                   <button >Registro</button>
                   <a class="btn btn-info btn-sm float-right" href="../Index.php">Regresar</a>
                </form>
            </div>
          

        </div>
    </div>

   </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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