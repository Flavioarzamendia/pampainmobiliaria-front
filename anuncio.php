<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Propiedades - anuncio</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="menu-flex">
                    <a class="logo" href="/">
                        <h2 >Pampa <span>Propiedades</span></h2>
                    </a>
                    <div class="mobile-menu">
                        <img src="build/img/barras.svg" alt="Icono de menu responsive">
                    </div>
                </div>
                
                
             

                <div class="derecha">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="propiedades.php">Propiedades</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <img src="build/img/dark-mode.svg" alt="boton dark mode" class="dark-mode-boton">
                    </nav>
                    
                </div>
            </div><!--Cierre de barra-->

            

        </div>

    </header>

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
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion-footer">
                <a href="nosotros.html">Nosotros</a>
                <a href="propiedades.html">Propiedades</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
            <p class="copyright"> &copy;Todos los derechos Reservados</script></p>
        </div>
    </footer>
    

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>