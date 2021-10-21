<?php 


require 'build/includes/funciones.php';
incluirTemplate('header');

//conexion db
require 'build/includes/config/db.php';
$db=conectarDB();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $ID=$_POST['id'];
    $ID=filter_var($ID,FILTER_VALIDATE_INT);

    if($ID){

        
       //consulta
         $consulta="Select * from propiedades where id =${ID}";
       //Resultado
        $resultado=mysqli_query($db,$consulta);  

        $propiedad=mysqli_fetch_assoc($res);
    }
}
?>
   
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa de Lujo en el Lago</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jepg">
            <img src="build/img/anuncio1destacada.jpg" alt="imagen propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">Precio:$3,000,000</p>

            <ul class="icono-anuncio">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono_baño">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis expedita unde soluta dicta
            nostrum ullam ad. Obcaecati iure nam odit molestiae hic nihil nulla unde facilis quasi facere dicta
             recusandae temporibus officiis perferendis blanditiis fuga, aperiam ab praesentium non? Consequuntur 
             fugit possimus nulla, sequi hic quam beatae voluptate, laborum quibusdam, omnis libero autem accusamus.
            Facere accusantium rem, dolores aperiam laboriosam animi magnam consectetur explicabo vitae sint optio 
             exercitationem corporis numquam odio dicta iure eos similique nobis ipsam asperiores perspiciatis modi.
            Sint quis, assumenda iusto ea necessitatibus cum, distinctio doloribus molestias ducimus,
             non repudiandae eos officia hic quae alias ad temporibus modi adipisci ullam eaque quod nam
            placeat reprehenderit! Unde quaerat nam repudiandae doloribus expedita aliquid corporis.
            </p>

            <p>
                Dolores ipsum a recusandae. Quia laboriosam exercitationem quos voluptas assumenda atque
                mi! Quis modi quas ex nesciunt tempore incidunt sint at optio? 
                Nihil cupiditate distinctio culpa ab facilis explicabo tenetur blanditiis exercitationem
                vero soluta? In provident nulla beatae non sapiente dolor architecto est omnis consequatur
                cupiditate vel magnam harum optio nostrum qui, voluptatibus impedit, iure sed, mollitia voluptates
                debitis facere explicabo hic! Dolorem laudantium aspernatur, praesentium, cupiditate nam autem unde, cum sint recusandae
            quae cumque vitae suscipit deserunt! Nulla at ea necessitatibus ex sunt?  
            </p>
        </div>

        <p></p>
    </main>
    <?php incluirTemplate('footer'); ?>    