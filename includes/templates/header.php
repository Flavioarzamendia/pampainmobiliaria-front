<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampa Propiedades</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ?  'inicio': '' ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="menu-flex">
                    <a class="logo" href="/">
                        <h2 >Pampa <span>Propiedades</span></h2>
                    </a>
                    
                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="Icono de menu responsive">
                        
                    </div>
                </div>
               
                
                <div class="derecha">
                    <nav class="navegacion navegacion-p">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="propiedades.php">Propiedades</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <a href=""></a>
                        <img src="/build/img/dark-mode.svg" alt="boton dark mode" class="dark-mode-boton" id="dark-mode-btn">
                    </nav>
                    
                </div>

                
            </div><!--Cierre de barra-->
                
                <?php if($inicio){ ?>
                    <h1>Exclusividad y Estilo en Venta de Casas y Departamentos</h1>
                    <?php };?>
            

        </div>

    </header>