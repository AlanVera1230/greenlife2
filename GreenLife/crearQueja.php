<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $rolSesion=$_SESSION['rolUsuario'];
  }
  else{
    if ($usuarioSesion=='' && $rolSesion=='') {
      header("Location:usuarios/crearCuenta.php");
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear queja</title>
    <link rel="stylesheet" href="css/formQueja.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">

        <form class="formQueja" action="" object="" method="post">
          <h1 class="text-center" style="color: #657A38;">Crear queja</h1>
          <div class="form-options">
          
          <label for="title"></label>
          <input class="input-4" type="text" field="" name="title" id="title" placeholder="Titulo">
          <br>
          <br>

          <label for="start">Fecha:</label>
            <input type="date" id="start" name="trip-start" placeholder="Fecha"
            min="1950-01-01" max="2023-12-31">
  
          <br>
          <br>
          <div class="mb-3">
            <label for="file" class="form-label"></label>
            <input class="form-control" type="file" id="file">
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" style="height: 100px"></textarea>
            <label for="descripcion">Descripción</label>
          </div>
  
          <br>
          <button type="submit" class="btn btn-block text-white" style="width: 100px; background-color: #657A38;">Enviar</button> 
      </div>
      </form>
      </div>
    
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>