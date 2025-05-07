<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milihuellas</title>
    <link rel="icon" href="<?php echo URL;?>/img/Logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--base href="/LandingPage/"-->
    <link rel="stylesheet" href="Style/index.css">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
        <meta name="keywords" content="login,formulariode acceso html">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montez&display=swap');
        </style>
</head>
<body>
    <header>
        <div>
            <nav class="buttons">
                <a id="nosotros" href="AboutUs.php">Conócenos</a>
                <button id="wsp"><a href="https://wa.me/3013487174" target="_blank"><img src="img/redes/icons8-whatsapp.gif" alt="whatsapp"/></a></button>
                <button id="compra"><a href="./ListaCompras.php"><img src="img/redes/icons8-comprar.gif" alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>
    <section>
        <div>
            <h3>Nuestras marcas</h3><br>
            <ul>
                <li><a href="marcas/Adidas.php">Adidas</a></li>
                <li><a href="marcas/Nike.php">Nike</a></li>
                <li><a href="marcas/Puma.php">Puma</a></li>
                <li><a href="marcas/Skechers.php">Skechers</a></li>
                <li><a href="marcas/Reebok.php">Reebok</a></li>
                <li><a href="marcas/UnderArmour.php">Under Armour</a></li>
                <li><a href="marcas/Fila.php">Fila</a></li>
                <li><a href="marcas/Personalizados.php">Personalizados</a></li>
            </ul>
        </div>
        <div class="image-container">
            <div class="slider-container">  
                <img
                  class="slider-item"
                  src="img/carousel/Fashion Shopping GIF by Itaú Uruguay.gif"
                />
                <img
                  class="slider-item"
                  src="img/carousel/desc.gif"
                />
                <img
                  class="slider-item"
                  src="img/carousel/Car Brand GIF by LEAL - El Proveedor Del Restaurante.gif"
                />
                <img
                  class="slider-item"
                  src="img/carousel/GIF by KLIKKLAKBAM.gif"
                />
                <img
                  class="slider-item"
                  src="img/carousel/shoes.gif"
                />  
            </div>  
        </div>
        <div class="redes">
            <a href="https://instagram.com" target="_blank"><img src="img/redes/icons8-instagram.gif" alt="instagram" /><br/>
            <a href="https://www.facebook.com/profile.php?id=61576237070815" target="_blank"><img src="img/redes/icons8-facebook.gif" alt="facebook" /><br/>
            <a href="https://www.tiktok.com/@milihuellas" target="_blank"><img src="img/redes/icons8-tik-tok.gif" alt="Tiktok" /><br/>
        </div>
    </section>
    <footer>
        <div class="inner-footer">
            <div>
                <img src="img/redes/icons8-reloj.gif" alt="Horario" width="20" height="20"/>
            </div>
            <div>Lunes a Sabado 10:00 a.m. a 8:00 p.m.</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="email.php">
                    <img src="img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" />
                </a>
            </div>
            <div>Contacto: Milihuellas06@gmail.com</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="preguntas.php">
                    <img src="img/redes/icons8-pregunta.gif" alt="preguntas frecuentes" width="20" height="20"/>
                </a>
            </div>
            <div>Preguntas Frecuentes</div>
        </div>
    </footer>
 
</body>
</html>