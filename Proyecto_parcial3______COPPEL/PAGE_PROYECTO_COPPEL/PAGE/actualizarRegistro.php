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
    
     
</head>
<body>
    <?php
        include 'conexion.php';
        $ofertas_id = $_GET["ofertas_id"];
        $sql = "SELECT * FROM ofertas WHERE id=" . $ofertas_id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <button type="button" class="btn btn-warning"><h1>Registrar Usuario</h1><hr></button>
                 
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Nombre</span></h1>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Edad</span></h1>
                        <input value="<?php echo $registro["edad"]; ?>" type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div>

                    <h1><span class="badge badge-secondary">Sexo</span></h1>
                    <div class="form-group">
                    <?php
                        if($registro["sexo"]){
                            echo "<input type='radio' name='sexo' value='1' checked> "?><span class="badge badge-secondary">Masculino</span><br><?php
                            echo "<input type='radio' name='sexo' value='0'> "?><span class="badge badge-secondary">Femenino</span><br><?php
                        } else {
                            echo "<input type='radio' name='sexo' value='1'> "?><span class="badge badge-secondary">Masculino</span><br><?php
                            echo "<input type='radio' name='sexo' value='0' checked> "?><span class="badge badge-secondary">Femenino</span><br><?php
                        }
                    ?>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Domicilio</span></h1>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"><?php echo $registro["domicilio"] ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Fecha de nacimiento</span></h1>
                        <input value="<?php echo $registro["fecha_nacimiento"]; ?>" type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>

  <?php
  
  
 
  ?>

</body>
</html>
