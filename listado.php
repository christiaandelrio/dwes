<?php 
require("conexion.php");
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>CRUD</title>

    <style type="text/css">
        body{
            background-color:#cebfd7;
            margin: 2%;
        }
    </style>
  </head>

  <body>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Detalle</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

      <?php 

        $sql = $conProyecto->query("SELECT * FROM productos");

        $fila = $sql -> fetchAll(PDO::FETCH_OBJ);

        foreach($fila as $row){
          //var_dump($row)
      ?>

        <tr>
          <td>
            <form action="detalle.php" method="get">
              <button type="submit" class="btn btn-info" name="id" value="<?php echo $row->id;?>">Detalle</button>
            </form>
          </td>
          <td><?php echo $row->id;?></td>
          <td><?php echo $row->nombre;?></td>
          <td>
              <a href="update.php" type="button" class="btn btn-danger">Actualizar</a>
              <a href="borrar.php" type="button" class="btn btn-warning">Borrar</a>
          </td>
        </tr>

      <?php } ?>
        <tr>
          <td colspan="4">
             <a href="crear.php" type="button" class="btn btn-dark">Añadir producto nuevo</a>
          </td>
        </tr>
      </tbody>
    </table>


  </body>
</html>
