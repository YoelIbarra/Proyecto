<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
    <title>Integrantes</title>
</head>
<body>

    <?php include('header.php') ?>

    <div class="contenedor ">
        <h2>Por favor, seleccione a quien desea ver</h2>
        <nav class="contacto-navegacion contacto-contenedor">
            <a href="integrantes.php?rol=0">Presidente</a>
            <a href="integrantes.php?rol=1">Tesorero</a>
            <a href="integrantes.php?rol=2">Secretario</a>
        </nav>
    </div>

        <?php 
            //Lleno variables para mostrar a las personas
            if(isset($_GET['rol'])){

                include('traer-datos-rol.php');

            }
        ?>

        <main class="contenedor">
            <h2>
                <?php 
                    if(isset($_GET['rol'])){
                        echo $rol ;
                    } 
                ?>                
            </h2>
            <h3>
                <?php 
                    if(isset($_GET['rol'])){
                        echo "Nombre: " . $nombre;
                    }
                ?> 
            </h3>
            <h3>
                <?php 
                    if(isset($_GET['rol'])){
                        echo "Apellido: " . $apellido;
                    }
                ?> 
            </h3>
            <h3>
                <?php 
                    if(isset($_GET['rol'])){
                        echo "Carrera: " . $carrera;
                    }
                ?>
            </h4>
        </main>
            
    
</body>
</html>