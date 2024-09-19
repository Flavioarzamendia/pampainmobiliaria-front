<?php
        require 'includes/funciones.php';
        
        incluirTemplates('header');
    ?>

    
    <main class="contenedor seccion">
        <h1>Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Más sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    Más de 15 años de experiencia.
                </blockquote>
                <p>
                    Con más de 15 años de experiencia en el mercado inmobiliario argentino, en Pampa Propiedades nos hemos convertido en un referente para aquellos que buscan excelencia y confianza. Hemos ayudado a cientos de clientes a encontrar su hogar ideal y realizar inversiones seguras y rentables, gracias a nuestro equipo de expertos que conoce a fondo el mercado y se compromete a brindar un servicio personalizado y transparente.
                </p>

                <p>
                    A lo largo de nuestra trayectoria, hemos logrado importantes hitos que reflejan nuestra dedicación y profesionalismo. Nos especializamos en propiedades de lujo y en inversiones inteligentes, siempre con el objetivo de superar las expectativas de nuestros clientes.
                </p>
            </div>
        </div>

    </main>


    <section class="contenedor seccion">
        <h2>Más Sobre Nosotros</h2>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Seguridad Protección 24/7 con tecnología avanzada y acceso controlado.
                </p>
            </div>

            <div class="icono">
                <img src="/build/img/icono2.svg" alt="Icono de precios" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Propiedades de lujo a precios competitivos, sin sacrificar la calidad.
                </p>
            </div>

            <div class="icono">
                <img src="/build/img/icono3.svg" alt="Icono  a tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Cumplimos con los plazos acordados para entregar tu propiedad sin demoras.
                </p>
            </div>
        </div>

    </section>
  

    <?php
        incluirTemplates('footer');
    ?>