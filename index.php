<?php 
require 'build/includes/funciones.php';
incluirTemplate('header',$inicio=true);
?>
    
    <main class="contenedor seccion">
        <h1>Mas sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading=lazy>
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam consequuntur
                    labore quasi autem expedita harum error. Quia, debitis similique officiis ipsa possimus magni,
                    molestiae, eum cumque beatae laborum libero perferendis!
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading=lazy>
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam consequuntur
                    labore quasi autem expedita harum error. Quia, debitis similique officiis ipsa possimus magni,
                    molestiae, eum cumque beatae laborum libero perferendis!
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading=lazy>
                <h3>Tiempo</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam consequuntur
                    labore quasi autem expedita harum error. Quia, debitis similique officiis ipsa possimus magni,
                    molestiae, eum cumque beatae laborum libero perferendis!
                </p>
            </div>
        </div>
    </main>
 
    <?php
    $limite=3;

    include 'build/includes/templates/anuncios.php';
    ?>
     <div class="alinear-derecha">
                <a class="boton-verde" href="anuncios.php">Ver todos</a>
            </div>
    </section>

    <section class="imagen-contacto">
        <h3>Encuentra la casa de tus sueños</h3>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a class="boton-amarillo-inline" href="contactos.php">Contactanos</a>
    </section>


    <div class="seccion-blog contenedor">

        <section class="blog">
            <h3>Nuestro Blog</h3>
    
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoración de tu hogar</h4>
                        <p class="quotes">Escrito el <span>16/09/2021</span> por: <span>Admin</span> </p>
                        
                        <p>
                            Maximiza el espacio en tu hogar  con esta guia, aprende a combinar muebles y 
                            colores para darle vida a tu espacio.
                        </p>
                    </a>
                </div>
            </article>
    
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la construcción de una terraza</h4>
                        <p class="quotes">Escrito el <span>16/09/2021</span> por: <span>Admin</span> </p>
                        
                        <p>
                            Consejos para la construccción de una terraza en el techo de tu casa
                            con los mejores materiales y ahorrando dinero.
                        </p>
                    </a>
                </div>
            </article>
        </section>
    
        <section>
            <h3>Testimoniales</h3>
    
            <div class="testimoniales">
                <blockquote>
                    El personal se comportó de una manera excelente, muy buena atención 
                    y la casa que se ofrecio cumplio con todas mis expectativas.
                </blockquote>
                <p>--Francisco Sandoval</p>
            </div>
        </section>
    </div>
    
    <?php incluirTemplate('footer'); ?>    