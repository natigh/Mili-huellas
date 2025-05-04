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
    <link rel="stylesheet" href="Style/AboutUs.css">
        
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
                <a id="home" href="index.php">Inicio</a>
                <button id="wsp"><a href="https://web.whatsapp.com/" target="_blank"><img src="img/redes/icons8-whatsapp.gif" alt="whatsapp"/></a></button>
                <button id="compra"><a href="ListaCompras.php"><img src="img/redes/icons8-comprar.gif" alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>
    <section>
        <div>
            <h3>Nuestra historia</h3>
            <p>
            Milihuellas S.A.S. Fue creada el 14 de febrero del 2024 en la ciudad de Medellín (Antioquia) por el grupo de asociados Sandra Osorio Natalia García, Viviana Mosquera y Laura Ramírez. Surgió en el politécnico de Colombia con la iniciativa de crear una empresa que fabrique calzados enfocados en personas con algun problema en los pies, que sea de calidad, con originales diseños y asequibles al cliente en cuanto a precios. Conforme con los resultados obtenidos y a la búsqueda de nuevos mercados, Milihuellas amplío sus líneas de fabricación tradicionales e incursionó en el ámbito de la seguridad industrial, obteniendo excelentes resultados. 
            </p><br>
        </div>
        <div>
            <h3>Nuestra visión</h3>
            <p>
            La fábrica de calzado Milihuellas S.A.S. será reconocida para el año 2029 como la empresa colombiana líder en el sector del calzado a nivel nacional, que genera valor a sus grupos de interés a través de la excelencia operacional, compromiso con el desarrollo social, innovación y rentabilidad financiera.
            </p><br>
            <h3>Nuestra misión</h3>
            <p>
            Somos una compañía que garantiza el bienestar y comodidad de nuestros clientes a través de la innovación de calzados. Contamos con procesos para maximizar los recursos, un equipo humano comprometido y excelente ambiente de negociación en la cadena productiva, logrando así, generar rentabilidad razonable a los socios.
            </p><br>
        </div>
        <div>
            <h3>Valores corporativos</h3>
            <p>
                <ul>
                    <li>Honestidad y Transparencia: Siempre hacemos nuestras acciones con honestidad y transparencia hacia nuestros clientes y colaboradores.
                    Contribuimos activamente a la protección del medio ambiente y promovemos prácticas comerciales sostenibles.</li><br><br>
                    <li>Cuidado al Cliente: Ponemos a nuestros clientes en el centro de todo lo que hacemos y les brindamos la mejor experiencia posible.</li><br><br>
                    <li>Pasión por las Personas: Ponemos a las personas en el centro de todo lo que hacemos y priorizamos sus necesidades y deseos.</li>
                </ul>
            </p>
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
                <a href="email.php"><img src="img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" />
            </div>
            <div>Contacto: Milihuellas@gmail.com</div>
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