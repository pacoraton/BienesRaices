<?php
    //Base de datos
    require '../../build/includes/config/db.php';
   $db=conectarDB();
    //var_dump($db);

    require '../../build/includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class=" boton boton-verde">Volver</a> 

    <form class="formulario"> 
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo" >Titulo de la Propiedad</label>     
            <input type="text" id="titulo" placeholder="Titulo de la propiedad" >

            <label for="precio">Precio </label>
            <input type="number" id="precio" placeholder="Precio" min="1">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea placeholder="Descripción" ></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ej:3" min='1'>

            <label for="wc">Baños</label>
            <input type="number" id="wc" placeholder="Ej:3" min='1'>

            <label for="estacionamiento">Estacionamientos</label>
            <input type="number" id="estacionamiento" placeholder="Ej:3" min='1'>

        </fieldset>

        <fieldset>
            <legend>Vendedores</legend>
            <select>
                <option selected disabled>--Vendedores--</option>
                <option>Paco</option>
                <option>Andres</option>
            </select>
        </fieldset>
    </form>


</main>

<?php
    incluirTemplate('footer');
?>


//titulo, precio , imagen descripcion