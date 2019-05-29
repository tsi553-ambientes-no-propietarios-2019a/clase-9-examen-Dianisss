
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-squiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    

</head>
<body>

          <div class="row">
               <div class="col-sm">
                    <form action="logica/loguear.php" method="POST">
                         <h1>Iniciar Sesion</h1>
                         <strong>Usuario: </strong>
                         <input type="text" name="usuario" placeholder="Usuario">
                         <br><br>
                         <strong>Clave</strong>
                         <input type="password" name="clave" placeholder="Clave">
                         <br><br>
                         <button type="submit" class="btn btn-primary">Iniciar</button>

                    </form>
                    <a href="registro_user.php">Registrate!</a>
                </div>
            </div>
         
     
</body>
</html>


