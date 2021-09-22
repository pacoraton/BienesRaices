<?php 
    require 'build/includes/funciones.php';
    incluirTemplate('header');
?>
   
    
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <div class="imagen-contactanos">
            <picture>
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <source srcset="build/img/destacada3.jpg" type="image/jpeg">
                <img src="build/img/destacada3.jpg" alt="Imagen contactanos" >
            </picture>
        </div>

        <h2>Llene el Formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal:</legend>

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Nombre">

                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Correo Electronico">

                <label for="tel">Telefóno:</label>
                <input type="tel" id="tel" placeholder="Telefóno">

                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                
                <label>Vende o Compra</label>
                <select>
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="vende">Vende</option>
                    <option value="compra">Compra</option>
                </select>

                <label for="presupuesto">Presupuesto:</label>
                <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                
                <p>Como quiere ser contactado</p>
                <div class="forma-contacto">
                    <label for="contacto">Correo</label>
                    <input type="radio" value="correo" name="contacto" id="contactar-correo"> 

                    <label for="telefono">Telefóno</label>
                    <input type="radio" value="telefono" name="contacto" id="contactar-telefono">
                </div>

                <p>Si eligío telefóno seleccione fecha y hora</p>

                <label>Fecha:</label>
                <input type="date" id="fecha">

                <label>Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" class="boton-verde" value="Enviar" > 
            
        </form>
    </main>

    <?php incluirTemplate('footer'); ?>    