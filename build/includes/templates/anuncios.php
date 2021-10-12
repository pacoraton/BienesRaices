<?php
    require 'build/includes/config/db.php';

    //base de datos
    $db=conectarDB();

    $limite=3;
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
                        <source srcset="build/img/anuncio1.webp" type="image/webp">
                        <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">  
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Casa de Lujo en el Lago</h3>
                        <p>Casa al lado del lago con acabados de lujo a excelente precio </p>
                        <p class="precio">$3000000</p>
                        <ul class="icono-anuncio">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono_baño">
                                <p>3</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                                <p>2</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones">
                                <p>4</p>
                            </li>
                        </ul>
                        <a class="boton boton-amarillo" href="anuncio.php">Ir al anuncio</a>
                    </div><!--Fin contenido anuncio-->
                </div><!--fin anuncio-->
          
                <?php } ?>

            </div> <!--Fin contenedor anuncio-->  
            
            <div class="alinear-derecha">
                <a class="boton-verde" href="anuncios.php">Ver todos</a>
            </div>
    </section>