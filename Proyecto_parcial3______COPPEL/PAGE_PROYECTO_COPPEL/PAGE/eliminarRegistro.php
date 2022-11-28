<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body class="body1">

 
 
 <?php

    include 'conexion.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM alumno WHERE id=" . $id;

    if($conexion->query($sql) === TRUE){
      echo""?>  
 
      <br><br>
      <div class="container">
        <div class="row">
              <div class="col-12">
                <div class="jumbotron">
                  <h1>Registro eliminado con exito</h1>               
                   <h2>A donde quieres ir:</h2><br><br>                
                          <a class="btn btn-primary" href="index.php">Inicio</a> 
                          <a class="btn btn-primary" href="registrarDatos.php">Agregar nuevo alumno</a>
                          <a class="btn btn-primary" href="consultarDatos.php">Consultar alumnos</a>
                          <a class="btn btn-primary" href="Alumnos.php">Alumnos destacados</a><br><br>
                          <img class="d-block w-1" src="imagenes/pal.gif" alt="First slide"> 
                          <hr class="my-4">
                  
                </div>
          </div>
      </div>
  </div>
    
       <?php





    } else {
        echo "Ocurrió un error: " . $conexion->error ."<br>";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    }













    echo "<script>
    Swal.fire({
        title: 'Eliminando Registro',
        html: 'Esto tardara <b></b> milisegundos.',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
        willClose: () => {
          clearInterval(timerInterval)
        }
      }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer')
        }
      })
</script>";
?>
</body>
</html>