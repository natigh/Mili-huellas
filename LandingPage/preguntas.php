<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milihuellas</title>
    <link rel="icon" href="<?php echo URL;?>/img/Logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/preguntas.css">

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
                <a id="inicio" href="index.php">Inicio</a>
                <a id="nosotros" href="AboutUs.php">Conócenos</a>
                <button id="wsp"><a href="https://web.whatsapp.com/" target="_blank"><img
                            src="img/redes/icons8-whatsapp.gif" alt="whatsapp" /></a></button>
                <button id="compra"><a href="./ListaCompras.php"><img src="img/redes/icons8-comprar.gif"
                            alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="slaider-container">
            <h1>Preguntas Frecuentes</h1>
            <div class="pregunta">
                <h2>¿Cómo puedo comprar?</h2>
                <p>Para realizar una compra, selecciona el producto que deseas y agrégalo a tu carrito de compras. Luego, dirígete a la sección de pago y sigue las instrucciones para completar tu compra.</p><br>
                <p>Si tu compra es personalizada, dirigete al apartado "Personalizados" en el menú de la izquiera en la página de inicio y envianos tu menensaje</p>
            </div>
            <div class="pregunta">
                <h2>¿Cuáles son los métodos de pago aceptados?</h2>
                <p>Aceptamos pagos con tarjeta de crédito, débito y transferencias bancarias.</p>
            </div>
            <div class="pregunta">
                <h2>¿Realizan envíos a todo el país?</h2>
                <p>Sí, realizamos envíos a todo el país. Los costos y tiempos de envío varían según la ubicación.</p>
            </div>
            <div class="pregunta">
                <h2>¿Puedo devolver un producto?</h2>
                <p>Sí, aceptamos devoluciones dentro de los 30 días posteriores a la compra. El producto debe estar en su estado original y sin usar, esto en cuanto a los productos tradicionales.</p><br>
                <p>Los prodctos personalizados cuentan con garantia de fabrica pero no tienen opción de devolución.</p>
            </div>
            <div class="pregunta">
                <h2>¿Cómo puedo contactar al servicio al cliente?</h2>
                <p>Puedes contactarnos a través de nuestro correo electrónico o por WhatsApp. Estaremos encantados de ayudarte.</p>
            </div>
            <div class="pregunta">
                <h2>¿Tienen tienda física?</h2>
                <p>No, actualmente solo operamos en línea. Sin embargo, puedes visitar nuestro sitio web para ver todos nuestros productos.</p>
            </div>
            <div class="pregunta">
                <h2>¿Ofrecen garantía en los productos?</h2>
                <p>Sí, ofrecemos garantía de 6 meses en todos nuestros productos. Si tienes algún problema, no dudes en contactarnos.</p>
            </div>
            <div class="pregunta">
                <h2>¿Cómo puedo rastrear mi pedido?</h2>
                <p>Una vez que tu pedido haya sido enviado, recibirás un correo electrónico con un enlace para rastrear tu envío.</p>
            </div>
            <div class="pregunta">
                <h2>¿Puedo modificar o cancelar mi pedido?</h2>
                <p>Si necesitas modificar o cancelar tu pedido, contáctanos lo antes posible. Haremos nuestro mejor esfuerzo para ayudarte.</p>
            </div>
            <div class="pregunta">
                <h2>¿Tienen descuentos por compras al por mayor?</h2>
                <p>Sí, ofrecemos descuentos para compras al por mayor. Contáctanos para más información.</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="inner-footer">
            <div>
                <img src="img/redes/icons8-reloj.gif" alt="Horario" width="20" height="20"/>
            </div>
            <div>Lunes a Sabado 10:00 a.m. a 8:00 p.m.</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href=""><img src="img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" />
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