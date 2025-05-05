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
    <div class="hist1">
        <div class="historia">
            <h3>Nuestra historia</h3>
            <p>
            Milihuellas S.A.S. Fue creada el 14 de febrero del 2024 en la ciudad de Medellín (Antioquia) <br> por el grupo de asociados Sandra Osorio Natalia García, Viviana Mosquera y Laura Ramírez. <br>Surgió en el politécnico de Colombia con la iniciativa de crear una empresa que fabrique <br> calzados enfocados en personas con algun problema en los pies, que sea de calidad, con <br> originales diseños y asequibles al cliente en cuanto a precios. Conforme con los resultados obtenidos <br> y a la búsqueda de nuevos mercados, Milihuellas amplío sus líneas de fabricación tradicionales e <br> incursionó en el ámbito de la seguridad industrial, obteniendo excelentes resultados. 
            </p>
        </div>
        <div class="img-h">
            <img src="img/conocenos/2025-05-04 14_38_14-Milihuellas.png" alt="hostoria">
        </div>
    </div>
    <div class="m-v">
        <div class="img-m-v">
            <img src="img/conocenos/mision.png" alt="mision-vision">
        </div>
        <div class="vision-mision">
            <h3>Nuestra visión</h3>
            <p>
            La fábrica de calzado Milihuellas S.A.S. será reconocida para el año 2029 <br> como la empresa colombiana líder en el sector del calzado a nivel nacional, <br> que genera valor a sus grupos de interés a través de la excelencia operacional, <br> compromiso con el desarrollo social, innovación y rentabilidad financiera.
            </p><br>
        
            <h3>Nuestra misión</h3>
            <p>
            Somos una compañía que garantiza el bienestar y comodidad de nuestros clientes <br> a través de la innovación de calzados. Contamos con procesos para maximizar los <br>recursos, un equipo humano comprometido y excelente ambiente de negociación en <br> la cadena productiva, logrando así, generar rentabilidad razonable a los socios.
            </p><br>
        </div>
    </div>
    <div class="valores">
        <div class="val">
            <h3>Valores corporativos</h3>
            <ul>
                    <li>Honestidad y Transparencia: Siempre hacemos nuestras acciones con honestidad y transparencia <br> hacia nuestros clientes y colaboradores.
                    Contribuimos activamente a la protección del medio ambiente<br> y promovemos prácticas comerciales sostenibles.</li><br><br>
                    <li>Cuidado al Cliente: Ponemos a nuestros clientes en el centro de todo lo que hacemos y les brindamos <br> la mejor experiencia posible.</li><br><br>
                    <li>Pasión por las Personas: Ponemos a las personas en el centro de todo lo que hacemos y priorizamos <br> sus necesidades y deseos.</li>
            </ul>
        </div>
        <div class="img-v">
            <img src="img/conocenos/valores.png" alt="valores">
        </div>
    </div>
    <div class="fundadoras">
            <h3>Nuestro equipo</h3>
            <div class="s-n">
                <div class="sandra">
                    <h2>Sandra Osorio</h2>
                    <img src="img/fundadoras/sandra.png" alt="Sandra Osorio" />
                </div>
                <div class="natalia">
                    <h2>Natalia García</h2>
                    <img src="img/fundadoras/natalia.jpg" alt="Natalia García" />
                </div>
            </div>
            <div class="v-l">
                <div class="viviana">
                    <h2>Viviana Mosquera</h2>
                    <img src="img/fundadoras/viviana.jpg" alt="Viviana Mosquéra" />
                </div>
                <div class="laura">
                    <h2>Laura Ramírez</h2>
                    <img  src="img/fundadoras/laura.jpg" alt="Laura Ramírez" />
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
                <a href="email.php"><img src="img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" /></a>
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