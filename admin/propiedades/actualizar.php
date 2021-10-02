<?php

    //Validar id correcto
    $id=$_GET['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);

    if(!$id){
        header('Location:/admin');
    
    }
    //Base de datos
    require '../../build/includes/config/db.php';
    $db=conectarDB();
    //var_dump($db);




    //Consulta para obtener la propiedad seleccionada
    $consulta= "Select * from propiedades where id = {$id} ";
    $resultado_con=mysqli_query($db,$consulta);
    $propiedad=mysqli_fetch_assoc($resultado_con);

    //Consulta para vendedores
    $sql="Select * From vendedores";
    $resultado=mysqli_query($db,$sql);    
    
    //Arreglo con mensajes de errores
    $errores=[];

    $titulo=$propiedad['titulo'];
    $precio=$propiedad['precio'];
    $descripcion=$propiedad['descripcion'];
    $habitaciones=$propiedad['habitaciones'];
    $wc=$propiedad['wc'];
    $estacionamiento=$propiedad['estacionamiento'];
    $id_vendedor=$propiedad['id_vendedor'];
    

    //Ejecuta el codigo despues de que el usuario envia el formulario
        if($_SERVER["REQUEST_METHOD"]=== "POST"){
          
            /*echo "<pre>";
                var_dump($_POST);
            echo "</pre>";  
*/
           
            $titulo=mysqli_real_escape_string($db, $_POST['titulo']);
            $precio=mysqli_real_escape_string($db, $_POST['precio']);
            $descripcion=mysqli_real_escape_string($db, $_POST['descripcion']);
            $habitaciones=mysqli_real_escape_string($db, $_POST['habitaciones']);
            $wc=mysqli_real_escape_string($db, $_POST['wc']);
            $estacionamiento=mysqli_real_escape_string($db, $_POST['estacionamiento']);
            $id_vendedor =mysqli_real_escape_string($db,  $_POST['vendedores']);
            $creado=mysqli_real_escape_string($db, Date('Y/m/d'));

            $imagen=$_FILES['imagen'];


        

        if(!$titulo){
            $errores[]="Agrega un titulo a la propiedad";
        }
        if(!$precio){
           $errores[]="Agrega un precio a la propiedad";
        }
        if(!$descripcion){
            $errores[]="Agrega una descripcion a la propiedad";
        }
        if(!$habitaciones){
            $errores[]="Agrega el numero de habitaciones";
        }
        if(!$wc){
            $errores[]="Agrega el numero de wc";
        }
        if(!$estacionamiento){
            $errores[]="Agrega el numero de estacionamientos";
        }
        if(!$id_vendedor){
            $errores[]="Agrega el vendedor";
        }

        //validar por tamaño de imagen
        
        $tamaño=1000 *1000;

         if($imagen['size']>$tamaño){
            $errores[]="La imagen es muy pesada";
         }   


         
        if(empty($errores)){


            //---Subida de archivos---//


            //ruta
            $carpeta_imagenes="../../imagenes/";

            //creacion carpeta
            if(!is_dir($carpeta_imagenes)){
                mkdir($carpeta_imagenes);
            }


           $nombreUnico=""; 

            //**subir imagen actualizada */

            if($imagen['name']){
                //eliminar imagen previa
                unlink($carpeta_imagenes.$propiedad['imagenes']);


               //Generar un nombre unico 
                $nombreUnico=md5(uniqid(rand(),true)). ".jpg";



            //Subir la imagen
            move_uploaded_file($imagen['tmp_name'],$carpeta_imagenes . $nombreUnico); 
            }else{
                $nombreUnico=$propiedad['imagenes'];
            }

            

            //Actualizar a la base de datos
              echo $query="UPDATE propiedades set titulo='${titulo}', precio=${precio},imagenes='${nombreUnico}', descripcion='${descripcion}',
                    habitaciones=${habitaciones},wc=${wc},estacionamiento=${estacionamiento} where id=${id} ";

            //Resultado query       
            $resultado=mysqli_query($db,$query);

            if($resultado){
                    //Redireccion a usuario
                    header('Location:/admin?resultado=2');   

                }else{
                    echo "Error en el registro";
                }

            }

        


        }

    
        require '../../build/includes/funciones.php';
        incluirTemplate('header');



?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedades</h1>

    <a href="/admin" class=" boton boton-verde">Volver</a> 

    <?php 
        foreach($errores as $error){?>
            <div class="alerta error "> 
               <?php echo $error; ?> 
            </div>

        <?php
        }
    ?>

    <form class="formulario" method="POST"  enctype="multipart/form-data"> 
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo" >Titulo de la Propiedad</label>     
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo; ?>"  >

                <label for="precio">Precio </label>
                <input type="number" id="precio" name="precio" placeholder="Precio" min="1" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpEg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $propiedad['imagenes'];?>" class="imagen-act">
                

                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej:3" min='1' value="<?php echo $habitaciones; ?>" >

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ej:3" min='1' value="<?php echo $wc; ?>" >

                <label for="estacionamiento">Estacionamientos</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej:3" min='1' value="<?php echo $estacionamiento; ?>" >

            </fieldset>

            <fieldset>
                <legend>Vendedores</legend>
                <select name="vendedores" >
                    <option value="">--Seleccione--</option>
                    <?php while($vendedor=mysqli_fetch_assoc($resultado)){?>
                        <option <?php echo $id_vendedor === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre']  ." ". $vendedor['apellido'] ;?> </option>
                    <?php }  ?>
                </select>
            </fieldset>

            <input type="submit" class="boton boton-verde" value="Actualizar Datos">
    </form>


</main>

<?php
    incluirTemplate('footer');
?>
