<?php
    require_once("config.php");
    //die ("url".URL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milihuellas</title>
    <link rel="icon" href="<?php echo URL;?>/img/Logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <button id="wsp"><a href="https://web.whatsapp.com/" target="_blank"><img src="img/redes/icons8-whatsapp.gif" alt="whatsapp"/></a></button>
                <button id="compra"><a href="ListaCompras.php"><img src="img/redes/icons8-comprar.gif" alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>
    <section class="marcas">    
        <h3>Nuestras marcas</h3>
        <ul>
            <a href="marcas/Adidas.php">Adidas</a><br>
            <a href="marcas/Nike.php">Nike</a><br>
            <a href="marcas/Puma.php">Puma</a><br>
            <a href="marcas/Skechers.php">Skechers</a><br>
            <a href="marcas/Reebok.php">Reebok</a><br>
            <a href="marcas/UnderArmour.php">Under Armour</a><br>
            <a href="marcas/Fila.php">Fila</a><br>
            <a href="marcas/Personalizados.php">Personalizados</a>
        </ul>
    </section>
    <div class="redes">
        <a href="https://instagram.com" target="_blank"><img src="img/redes/icons8-instagram.gif" alt="instagram"/></a><br>
        <a href="https://facebook.com" target="_blank"><img src="img/redes/icons8-facebook.gif" alt="facebook"/></a><br>
        <a href="https://tiktok.com" target="_blank"><img src="img/redes/icons8-tik-tok.gif" alt="Tiktok"/></a><br>   
    </div>

    <footer>
        <div>
            <img src="img/redes/icons8-reloj.gif" alt="Horario"/><br>
            <p>
             Lunes a Sabado 10:00 a.m. a 8:00 p.m. <br>
        </div>
        <div>
            <a href="email.php"><img src="img/redes/icons8-mensaje.gif" alt="e-mail"/></a><br>
            <p>
                Contacto: Milihuellas@gmail.com
            </p>
        </div>
        <div>
            <a href="preguntas.php"><img src="img/redes/icons8-pregunta.gif" alt="preguntas frecuentes"/></a><br>
            <p>
                Preguntas Frecuentes
            </p>
        </div>
        
    </footer>
 
</body>
</html>