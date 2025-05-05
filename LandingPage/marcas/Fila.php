<?php
    require_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milihuellas</title>
    <link rel="icon" href="<?php echo URL;?>/../img/Logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/fila.css">

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
                <a id="inicio" href="../index.php">Inicio</a>
                <a id="nosotros" href="../AboutUs.php">Conócenos</a>
                <button id="wsp"><a href="https://web.whatsapp.com/" target="_blank"><img
                            src="../img/redes/icons8-whatsapp.gif" alt="whatsapp" /></a></button>
                <button id="compra"><a href="ListaCompras.php"><img src="../img/redes/icons8-comprar.gif"
                            alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>
    <section class="grid">
        <div class="marcas">
            <h3>Nuestras marcas</h3><br>
            <ul>
            <li><a href="Adidas.php">Adidas</a></li><br>
                <li><a href="Nike.php">Nike</a></li><br>
                <li><a href="Puma.php">Puma</a></li><br>
                <li><a href="Skechers.php">Skechers</a></li><br>
                <li><a href="Reebok.php">Reebook</a></li><br>
                <li><a href="UnderArmour.php">Under Armour</a></li><br>
                <li><a href="Personalizados.php">Personalizados</a></li>
            </ul>
            <a href="../index.php"><img src="../img/iconos/icons8-volver-64.png" alt="atras"></a>
        </div>
        <div class="fila">
            <div>
                <h2>Niños - Fila</h2>
            </div>
            <div></div>
            <div></div>
            <div class="n">
                <img src="../img/fila/n1.png" alt="n041">
                <h3>Cod.N041</h3>
                <h3>$250.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n2.png" alt="n042">
                <h3>Cod.N042</h3>
                <h3>$270.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n3.png" alt="n043">
                <h3>Cod.N043</h3>
                <h3>$230.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n4.png" alt="n044">
                <h3>Cod.N044</h3>
                <h3>$240.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n5.png" alt="n045">
                <h3>Cod.N045</h3>
                <h3>$290.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n6.png" alt="n046">
                <h3>Cod.N046</h3>
                <h3>$250.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n7.png" alt="n047">
                <h3>Cod.N047</h3>
                <h3>$260.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n8.png" alt="n048">
                <h3>Cod.N048</h3>
                <h3>$240.000cop</h3>
            </div>
            <div class="n">
                <img src="../img/fila/n9.png" alt="n049">
                <h3>Cod.N049</h3>
                <h3>$220.000cop</h3>
            </div>
        </div>
    </section>
    <div class="fila-fem">
        <div></div>
        <div class="mujer">
            <div><h2>Mujer - Fila</h2></div>
            <div></div>
            <div></div>
            <div class="m">
                <img src="../img/fila/m1.png" alt="m0851">
                <h3>Cod.M0851</h3>
                <h3>$350.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m2.png" alt="m0852">
                <h3>Cod.M0852</h3>
                <h3>$370.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m3.png" alt="m0853">
                <h3>Cod.M0853</h3>
                <h3>$330.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m4.png" alt="m0854">
                <h3>Cod.M0854</h3>
                <h3>$340.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m5.png" alt="m0855">
                <h3>Cod.M0855</h3>
                <h3>$390.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m6.png" alt="m0856">
                <h3>Cod.M0856</h3>
                <h3>$350.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m7.png" alt="m0857">
                <h3>Cod.M0857</h3>
                <h3>$360.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m8.png" alt="m0858">
                <h3>Cod.M0858</h3>
                <h3>$340.000cop</h3>
            </div>
            <div class="m">
                <img src="../img/fila/m9.png" alt="m0859">
                <h3>Cod.M0859</h3>
                <h3>$320.000cop</h3>
            </div>
        </div>
    </div>
    <div class="fila-men">
        <div></div>
        <div class="hombre">
            <h2>Hombre - Fila</h2>
            <div></div>
            <div></div>
            <div class="h">
                <img src="../img/fila/h1.png" alt="h0361">
                <h3>Cod.H0361</h3>
                <h3>$350.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h2.png" alt="h0362">
                <h3>Cod.H0362</h3>
                <h3>$370.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h3.png" alt="h0363">
                <h3>Cod.H0363</h3>
                <h3>$330.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h4.png" alt="h0364">
                <h3>Cod.H0364</h3>
                <h3>$340.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h5.png" alt="h0365">
                <h3>Cod.H0365</h3>
                <h3>$390.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h6.png" alt="h0366">
                <h3>Cod.H0366</h3>
                <h3>$350.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h7.png" alt="h0367">
                <h3>Cod.H0367</h3>
                <h3>$360.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h8.png" alt="h0368">
                <h3>Cod.H0368</h3>
                <h3>$340.000cop</h3>
            </div>
            <div class="h">
                <img src="../img/fila/h9.png" alt="h0369">
                <h3>Cod.H0369</h3>
                <h3>$320.000cop</h3>
            </div>
        </div>
        </div>
    </div>
    <footer>
        <div class="inner-footer">
            <div>
                <img src="../img/redes/icons8-reloj.gif" alt="Horario" width="20" height="20" />
            </div>
            <div>Lunes a Sabado 10:00 a.m. a 8:00 p.m.</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="email.php"><img src="../img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" />
            </div>
            <div>Contacto: Milihuellas06@gmail.com</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="preguntas.php">
                    <img src="../img/redes/icons8-pregunta.gif" alt="preguntas frecuentes" width="20" height="20" />
                </a>
            </div>
            <div>Preguntas Frecuentes</div>
        </div>
    </footer>
</body>

</html>