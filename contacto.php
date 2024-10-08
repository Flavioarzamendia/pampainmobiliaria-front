<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Propiedades - Contacto</title>
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

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Contactanos ">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario">

            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email"  id="email" placeholder="Tu correo">

                <label for="telefono">Teléfono</label>
                <input type="tel"  id="telefono" placeholder="Tu numero de telefono">

                <label for="mensaje">Mensaje</label>
                <textarea  id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Sobre la Propiedad</legend>
                <label for="opciones">Vende o Comprar</label>
                <select id="opciones">
                    <option value="comprar">Comprar</option>
                    <option value="vender">Vender</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" name="" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="contacto" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">E-mail</label>
                    <input type="radio" name="contacto" value="email" id="email">
                </div>
                <p>Si eligio teléfono elegir fecha y hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" name="" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" min="09:00" max="18:00" id="hora">
            </fieldset>



            <input type="submit" value="Enviar" class="boton-verde">
        </form>

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