<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BienesRaices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''  ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/index.php" >
                    <img src="/build/img/logo.svg" alt="Logo de Bienes Raices">
                </a>

                <div class="menu-mobile">
                    <img src="/build/img/barras.svg"  alt="menu responsive">
                </div>
     
                <div class="derecha">
                    <img  class="dark-mode-boton"  src="/build/img/dark-mode.svg" alt="modo oscuro">
                    <nav class="nav-header">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contactos.php">Contactos</a>
                    </nav>
                </div>
                
               
            </div><!--.barra-->
            
            <h1><?php echo $inicio ? 'Venta de casas y Departamentos Exclusivos de Lujo' : ''  ?></h1> 
        </div>  
    </header>