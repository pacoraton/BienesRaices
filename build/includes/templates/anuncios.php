<?php
    require 'build/includes/config/db.php';

    //base de datos
    $db=conectarDB();

    
    //consulta
    $consulta="Select * from propiedades limit ${limite}";

    //resultado
    $resultado=mysqli_query($db,$consulta);
?>



<section class="contenedor seccion">
        <h2>Venta de Casas y Departamentos</h2>

            <div class="contenedor-anuncio">    
                
           <?php while($propiedad=mysqli_fetch_assoc($resultado))   { ?> 
                <div class="anuncio">
                    <picture>
                        
                        <img loading="lazy" src="../../../imagenes/<?php echo $propiedad['imagenes'] ?>" alt="anuncio">  
                    </picture>
                    <div class="contenido-anuncio">
                        <h3><?php echo $propiedad['titulo'] ?></h3>
                        <p><?php echo $propiedad['descripcion'] ?></p>
                        <p class="precio">$<?php echo $propiedad['precio'] ?></p>
                        <ul class="icono-anuncio">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono_baño">
                                <p><?php echo $propiedad['wc'] ?></p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                                <p><?php echo $propiedad['estacionamiento'] ?></p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones">
                                <p><?php echo $propiedad['habitaciones'] ?></p>
                            </li>
                        </ul>
                        <a class="boton boton-amarillo" href="anuncio.php">Ir al anuncio</a>
                    </div><!--Fin contenido anuncio-->
                </div><!--fin anuncio-->
          
                <?php } ?>

            </div> <!--Fin contenedor anuncio-->  
            
           