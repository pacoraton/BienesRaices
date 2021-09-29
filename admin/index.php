<?php 
    //Importar conexion
    require '../build/includes/config/db.php';
    $db=conectarDB();

    //Escribir la consulta

    $sql="Select * from propiedades";

    //Consultar a la base de datos

    $resultado_consulta=mysqli_query($db,$sql);


    //Muestra mensaje consicional
    $resultado=$_GET['resultado'] ?? null;

    //incluye un tamplate
    require '../build/includes/funciones.php';
    incluirTemplate('header');

   
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
        <?php
            if($resultado==1){?>
            <div class="alerta exito">Se ha registrado Correctamente </div>
       <?php }
        ?>
    <a href="/admin/propiedades/crear.php" class=" boton boton-verde">Nueva Propiedad</a>

 
  <table class="propiedades">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody><!--Mostrar los resultados -->
          <?php 

            while($propiedades=mysqli_fetch_assoc($resultado_consulta)){ ?>
          
            <tr>
                <td><?php echo $propiedades['id'] ?></td>
                <td><?php echo $propiedades['titulo']?></td>
                <td><img src="/imagenes/<?php echo $propiedades['imagenes']; ?>" class="imagen-tabla"></td>
                <td>$<?php echo  $propiedades['precio']; ?></td>
                <td>
                    <a href="#" class="boton boton-rojo">Eliminar</a>
                    <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedades['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                </td>
            </tr>

          <?php 
            }
         ?>
    </tbody>
  </table>

</main>

<?php
    incluirTemplate('footer');
?>
