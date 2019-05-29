<?PHP


?>

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
                    <form action="logica/registro.php" method="POST">
                         <h1>Registro de Usuarios</h1>
                         
                         <strong>id:</strong>
                         <br><br>

                         <input type="text" name="id" placeholder="nombre">
                         <br><br>

                         <strong>Nombre: </strong>
                         <input type="text" name="Nombre" placeholder="nombre">
                         <br><br>

                         <strong>Rol:</strong>
                         <select name="type" required="required">
                              <option value="administrador">Administrador</option>
                              <option value="cliente">Cliente</option>
                         </select>
                         <br><br>

                         <strong>Nombre Usuario: </strong>
                         <input type="text" name="username" placeholder="nombre de usuario">
                         <br><br>

                         <strong>Contraseña</strong>
                         <input type="password" name="pass1" placeholder="contraseña">
                         <br><br>

                         <strong>Confirmar Contraseña</strong>
                         <input type="password" name="pass2" placeholder="repetir contraseña">
                         <br><br>

                         <button type="submit">Registrar</button>

                    </form>
               </div>
          </div>
     
     
</body>
</html>
