<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Documento.css">
 

</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    
 

    <div class="container">
        <div id="border">
        <div class="row">
            <div class="col-12">
            <h1><span class="badge badge-warning"> Registrar oferta </span></h1>
                <form method="post" action="guardar_sucursal.php" enctype="multipart/form-data">
                  

                <div class="form-group">
                    <h1><span class="badge badge-secondary">Nombre</span></h1>
                        <textarea name="nombre" id="" cols="1" rows="1" class="form-control"></textarea>
                    </div>

   

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Imagen</span></h1>
                        <input type="file" class="form-control" name="imagen" placeholder="Teclea el nombre">
                    </div>

                   
               
                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Direccion</span></h1>
                        <textarea name="direccion" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="sucursales.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>

    <script src="js/jquery-3.6.1.js"></script>
     
    <script src="js/bootstrap.js"></script>
</body>
</html>