 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Document</title>
 </head>
 <body class="body1">

 <?php

include 'conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$domicilio = $_POST["domicilio"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$sql = "UPDATE alumno    SET nombre='".$nombre."' , edad= ".$edad.",". 
"sexo = $sexo, domicilio = '".$domicilio."', fecha_nacimiento ='".$fecha_nacimiento."'".
"WHERE id=".$id;

if($conexion->query($sql) === TRUE){
    echo""?>  
    <br><br>
    <div class="container">
      <div class="row">
            <div class="col-12">
              <div class="jumbotron">
                <h1>Registro Actualizado con exito</h1>               
                 <h2>A donde quieres ir:</h2><br><br>                
                        <a class="btn btn-primary" href="index.php">Inicio</a> 
                        <a class="btn btn-primary" href="registrarDatos.php">Agregar nuevo alumno</a>
                        <a class="btn btn-primary" href="consultarDatos.php">Consultar alumnos</a>
                        <a class="btn btn-primary" href="Alumnos.php">Alumnos destacados</a>
                <hr class="my-4">
                
              </div>
        </div>
    </div>
</div>
<?php

} else {
    echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
}

$conexion->close();

echo "<script>
Swal.fire(
'Exito',
'Se actulizo con exito  .$id. ',
'success'
)
</script>";
?>
 </body>
 </html>