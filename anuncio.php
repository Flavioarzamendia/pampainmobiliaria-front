<?php
       require 'includes/funciones.php';
        
       incluirTemplates('header');
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h2>Casa en venta frente al bosque</h2>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="propiedad destacada" loading="lazy">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$800,000,000</p>

            <ul class="icono-caracteristicas">
                <li>
                    <img loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc">
                    <p>8</p>
                </li>
                <li>
                    <img loading="lazy" src="/build/img/icono_estacionamiento.svg" alt="icono estacinamiento">
                    <p>6</p>
                </li>
                <li>
                    <img loading="lazy" src="/build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>10</p>
                </li>
            </ul>
            <p>
                Esta espectacular casa ofrece un refugio de tranquilidad y belleza natural, ubicada justo frente a un majestuoso bosque. Con amplios ventanales que enmarcan vistas panorámicas, la propiedad cuenta con tres dormitorios, un living espacioso con chimenea, y una cocina moderna equipada con los mejores electrodomésticos. El diseño abierto conecta el interior con una terraza amplia, perfecta para disfrutar del aire fresco y las impresionantes vistas. Rodeada de naturaleza, esta casa es el lugar ideal para quienes buscan paz y privacidad, sin renunciar al confort y la elegancia
            </p>
        </div>

    </main>
   
    <?php
        incluirTemplates('footer');
    ?>