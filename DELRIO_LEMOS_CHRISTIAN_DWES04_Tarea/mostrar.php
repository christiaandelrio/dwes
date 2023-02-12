<?php session_start();     //Inicio la sesión


    if((isset($_SESSION['idioma']) || isset($_SESSION['perfil']) || isset($_SESSION['zona'])) && isset($_POST['borrar'])){    //Borramos las preferencias
        

        $_SESSION['idioma']="";       
        $_SESSION['perfil']="";
        $_SESSION['zona']="";
        
        unset($_SESSION);  

        echo "<p class='text-danger'>Se han borrado las preferencias de usuario</p>"; //Mostramos mensaje
    }
    
    if(!isset($_SESSION) && isset($_POST['borrar'])){
        echo "<p class='text-danger'>Debes fijar primero las preferencias</p>";
    }


    if(isset($_POST['establecer'])){   //Establecer lleva a preferencias.php
        header('Location:preferencias.php');
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Tarea Unidad 4</title>
  </head>



  <body>
  <div class="d-flex flex-column mb-3" >
        <h1>Preferencias</h1>
        <form class="form-floating" method="post">
            <h6>Idioma: <?php if(isset($_SESSION['idioma'])){echo $_SESSION['idioma'];}?></h6>
            <br>
            <h6>Perfil Público: <?php if(isset($_SESSION['perfil'])){echo $_SESSION['perfil'];}?></h6>
            <br>
            <h6>Zona Horaria: <?php if(isset($_SESSION['zona'])){echo $_SESSION['zona'];}?></h6>
            <br>
            <input type="submit" class="btn btn-info" name="establecer" value="Establecer" />
            <input type="submit" class="btn btn-danger" name="borrar" value="Borrar" />
        </form>
    </div>
  </body>
</html>
