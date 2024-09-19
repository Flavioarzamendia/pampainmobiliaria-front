<?php
        require 'includes/funciones.php';
        
        incluirTemplates('header');
    ?>
    
    

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="imagen blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el : <span>20/08/2024</span> por <span>Admin</span></p>
                <p>
                    Consejos para construir una terraza en tu techo con los mejores materiales y ahorrando dinero.
                </p>
            </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="imagen blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                <h4>Guia para la decoracion de tu casa</h4>
                <p>Escrito el : <span>20/08/2023</span> por <span>Admin</span></p>
                <p>
                    Aprende a combinar muebles y colores para darle vida a tu hogar.
                </p>
            </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="imagen blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                <h4>Renueva Tu Sala en 5 Pasos</h4>
                <p>Escrito el : <span>20/08/2024</span> por <span>Admin</span></p>
                <p>
                    Transforma tu sala en un espacio moderno y acogedor con estos sencillos pasos de decoración y diseño.
                </p>
            </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="imagen blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                <h4>Crea el Dormitorio de Tus Sueños</h4>
                <p>Escrito el : <span>20/08/2023</span> por <span>Admin</span></p>
                <p>
                    Ideas y consejos para diseñar un dormitorio que combine confort, estilo y funcionalidad para un descanso perfecto.
                </p>
            </a>
            </div>
        </article>

    </main>
   

    <?php
        incluirTemplates('footer');
    ?>