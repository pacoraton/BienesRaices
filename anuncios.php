<?php 
    require 'build/includes/funciones.php';
    incluirTemplate('header');
?>
   
    
    <main class="contenedor seccion">
    <?php
    $limite=10;

    include 'build/includes/templates/anuncios.php';
    ?>
    </main>

    <?php incluirTemplate('footer'); ?>    