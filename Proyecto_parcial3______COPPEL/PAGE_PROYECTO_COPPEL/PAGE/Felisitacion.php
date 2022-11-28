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
    <title>Felisitaciones</title>
</head>
<body class="body4">
    <center><h1>🥳Felicidades🥳</h1></center>
 
    
<div class="row">

        <div class="col-sm-3">
        <div class="card">
        <img src="imagenes/oso.gif" class="card-img-top" alt="..." height="490px">
         
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
        <img src="imagenes/dip.gif" class="card-img-top" alt="..." height="490px">
        
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
        <img src="imagenes/fel.gif" class="card-img-top" alt="..." height="490px">
         
        </div>
        </div>

        <div class="col-sm-3">
        <div class="card">
        <img src="imagenes/fel2.gif" class="card-img-top" alt="..." height="490px">
         
        </div>
        </div>

         <a class="btn btn-primary" href="index.php"><h1><center> Regresar a inicio </center></h1></a> 


</div>





    <?php
echo "<script>

Swal.fire({
  title: '🥳Felicitacion enviada🥳',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url('imagenes/gato.webp')
    left top
    no-repeat
  `
})

</script>";
?>

    
</body>
</html>