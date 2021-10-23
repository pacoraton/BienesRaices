<?php 
$ID=$_GET['id'];
$ID=filter_var($ID,FILTER_VALIDATE_INT);

require 'build/includes/funciones.php';
incluirTemplate('header');

//conexion db
require 'build/includes/config/db.php';
$db=conectarDB();


 //consulta
 $consulta="Select * from propiedades where id =${ID}";
 //Resultado
  $resultado=mysqli_query($db,$consulta);  

  $propiedad=mysqli_fetch_assoc($resultado);



    if(!$ID){

        
      
    }
?>
   
    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo'] ?></h1>
        <picture>
            
            <img src="../../../imagenes/<?php echo $propiedad['imagenes'] ?>" alt="imagen propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">Precio:<?php echo $propiedad['precio'] ?></p>

            <ul class="icono-anuncio">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono_baño">
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones">
                    <p><?php echo $propiedad['habitaciones'] ?></p>
                </li>
            </ul>

            <p>
            <?php echo $propiedad['descripcion'] ?>
            </p>

            
        </div>

        <p></p>
    </main>
    <?php
      
    
    incluirTemplate('footer'); ?>    