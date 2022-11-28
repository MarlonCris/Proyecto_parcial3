<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="tablas.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from ofertas";
      $datos = $conexion->query($sql);
     

    ?>

    <?php include 'menu.php'; ?>
    <br>
    <center><a href="registrarDatos.php" class="btn btn-success">Agregar oferta</a></center><br>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID de la oferta</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Fecha</th>
                            
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 

                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["ofertas_id"]; ?></td>
                            <td><?php echo $row["descripcion"]; ?></td>
                            <td><center><img src= "<?php echo $row['url']; ?>" alt="" width="100" height="100"></center></td>
                            <td><?php echo $row["fecha"]; ?></td>
                            <td>
                          
                                <a href="actualizarRegistro.php?id=<?php echo $row["ofertas_id"]; ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminarRegistro.php?id=<?php echo $row["ofertas_id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>

<?php
    echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Consutario de alumnos',
  showConfirmButton: false,
  timer: 1500
})
</script>";
?>

</body>
</html>