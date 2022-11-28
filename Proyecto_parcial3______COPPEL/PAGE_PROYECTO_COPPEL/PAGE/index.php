<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">

     
    <link rel="stylesheet" href="Documento.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
</head>
<body> 
    <?php include 'menu.php'; ?>
    <br>
   
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-left: 100px; padding-right: 100px; padding-top: 10px; padding-bottom: 10px ">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/banco.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/cafeteria.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/cancha.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/computo.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

   


  
 





 

 
                     
 

    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
   <script>
    Swal.fire({
  title: '<strong>Terminos y<u> condiciones</u></strong>',
  icon: 'info',
  html:
    'Holas por favor acepta nuestros terminos y<b> condiciones.</b>, ' +
    '<a href="terminos.php">Terminos y condiciones</a> ' +
    'de CETIS107',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class="fa fa-thumbs-up">Aceptar</i> ',
  confirmButtonAriaLabel: '',
  cancelButtonText:
    '<i class="fa fa-thumbs-down">No gracias</i>',
  cancelButtonAriaLabel: 'Thumbs down'
})
   </script>
  
    <?php
    
    
echo "<script>
 

Swal.fire({
  title: '<strong>HTML <u>example</u></strong>',
  icon: 'info',
  html:
    'You can use <b>bold text</b>, ' +
    '<a href='//sweetalert2.github.io'>links</a> ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class='fa fa-thumbs-up'></i> Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '<i class='fa fa-thumbs-down'></i>',
  cancelButtonAriaLabel: 'Thumbs down'
})

</script>";




?>




<script src="js/jquery-3.6.1.js"></script>
</body>
</html>

 
 
