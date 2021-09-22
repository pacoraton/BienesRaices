<?php 
    require 'build/includes/funciones.php';
    incluirTemplate('header');
?>
    
    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="seccion-nosotros">

       
            <div class="nosotros-img">
                <picture>
                   <source srcset="build/img/nosotros.webp" type="image/webp">
                   <source srcset="build/img/nosotros.jpg" type="image/jpg">
                   <img src="build/img/nosotros.jpg" alt="Imagen nosotros"> 
                </picture>
             </div>   

             <div class="texto-nosotros">
                 <blockquote>
                     Mas de 25 años de experiencia
                 </blockquote>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aperiam tempore doloremque repellendus quis exercitationem non 
                delectus asperiores explicaboLorem ipsum dolor sit amet consectetur adipisicing elit.
                Aperiam tempore doloremque repellendus quis exercitationem non 
                delectus asperiores explicabo.. </p>
               <p> 
                Labore nisi magni et molestias. Ad vitae accusamus eaque. 
                Nihil, doloribus praesentium! 
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aperiam tempore doloremque repellendus quis exercitationem non 
                delectus asperiores explicabo. 
                </p>
            </div>
        </div>    
    </main>

    <section class="contenedor seccion">
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
    </section>
    <?php incluirTemplate('footer'); ?>    