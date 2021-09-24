<?php 
    require '../build/includes/funciones.php';
    incluirTemplate('header');

    $resultado=$_GET['resultado'] ?? null;
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
        <?php
            if($resultado==1){?>
            <div class="alerta exito">Se ha registrado Correctamente </div>
       <?php }
        ?>
    <a href="/admin/propiedades/crear.php" class=" boton boton-verde">Nueva Propiedad</a>
</main>

<?php
    incluirTemplate('footer');
?>
