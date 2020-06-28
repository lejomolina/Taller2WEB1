<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primerapágina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  </head>
<body>
    <header>
    </header>
    <Main>        
      <div class="container mt-4">      
          <div class="row">
            <div class="col-5 fondo">
              <h1 class="text-center">REGISTRATE EN NUESTRA WEB</h1>
              <form action="agregardatos.php" method= "POST">
              <div class="form-group">
                  <label for="nombre_usuario">Nombre de usuario:</label>
                  <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingrese su correo:</label>
                  <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Ingrese su contraseña:</label>
                  <input type="password" class="form-control" id="InputPassword" name="InputPassword">
                </div>
                <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Agregar</button>
              </form>
                <br>
                <br>
                <div>
                <form action="buscarDatos.php" method= "POST">
                  <h4>Buscar registro</h4>
                  <div class="input-group mb-3">
                    <input type="text" id="nombreBuscar" name="nombreBuscar" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-success btn-primary" id="buscarReg" name="buscarReg">Buscar</button>
                </div>
                </form>
                <br>
                <div>
                <form action="eliminarDatos.php" method= "POST">
                  <h4>Eliminar registro</h4>
                  <div class="form-group mb-3">
                    <input type="name" class="form-control" name="nombreEliminar" aria-describedby="emailHelp">
                  </div>
                <div>
                  <div class="form-group form-check">
                </div>
                <div>
                  <button type="submit" class="btn btn-danger btn-primary" id="elimireg" name="elimireg">Eliminar</button>
                </div>
                </form>
                <br>
                <br>
                <br>
                </div>
                </div>   
            </div>
            <div class="col-5 border border-primary">
              <h3 class="text-center"> RESULTADO
              </h3>
          </div>            
          </div>          
        </div>
    </Main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
</body>
</html>