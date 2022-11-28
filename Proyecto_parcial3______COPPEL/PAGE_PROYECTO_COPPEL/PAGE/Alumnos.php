<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    
    <title>Document</title>
</head>
<body class="body3">
<?php include 'menu.php'; ?>
<p class="texto_animado">
          Alumnos destacados<br>
      </p>
      <center>
      <button type="button" class="btn btn-primary">  
      <div class="alert alert-primary" role="alert">
 <center>Lista de alumnos destacados del plantel</center>
</div>
</center>
</button>
<br><center>
<a class="btn btn-primary" href="index.php">Inicio</a><br><br>
</center>

<div class="row">

        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/marlon.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Marlon Cristian</h5>
            <p class="card-text">Destacado en las olimpiadas de matematicas.</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>
         
        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/omar.jpg" class="card-img-top" alt="..."  height="490px">
          <div class="card-body">
            <h5 class="card-title">Omar Valdes</h5>
            <p class="card-text">Destacado por calificar para las olimpiadas de educacion fisica.</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>
        

        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/armando.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Armando Sandoval</h5>
            <p class="card-text">Destacado por obtener calificaciones perfectas en CTS</p>
            <a href= "Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/ek.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Eknow</h5>
            <p class="card-text"> Destacado por exentar calculo diferencial</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>

        
</div><br> 

<div class="row">
  
<div class="col-sm-3">
        <div class="card">
          <img src="imagenes/eduardo.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Eduardo Aguirre</h5>
            <p class="card-text">Destacado por aprovar Fisica con calificaciones perfectas</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/Ernesto.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Ernesto de la Rocha</h5>
            <p class="card-text">Destacado por sobre salir en construccion de bases de datos</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/kevin.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Kevin Castañeda</h5>
            <p class="card-text">Destacado por aprobar ingles con calificaciones perfectas</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
          <img src="imagenes/yael.jpg" class="card-img-top" alt="..." height="490px">
          <div class="card-body">
            <h5 class="card-title">Yael Magdiel</h5>
            <p class="card-text">Destacado por sobre salir en desarrollo de aplicaciones web</p>
            <a href="Felisitacion.php" class="btn btn-primary">Felisitar</a>
          </div>
        </div>
        </div>












</div>
 

  
<?php
echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Alumnos destacados',
  showConfirmButton: false,
  timer: 1500
})
</script>";
?>
 
</body>
</html>