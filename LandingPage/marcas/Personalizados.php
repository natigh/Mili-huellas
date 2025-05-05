<?php
    require_once("../config.php");

    require '../../PHPMailer/src/PHPMailer.php';
    require '../../PHPMailer/src/SMTP.php';
    require '../../PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir los datos del formulario
        $nombre = htmlspecialchars($_POST['txtNames']);
        $email = htmlspecialchars($_POST['txtEmail']);
        $telefono = htmlspecialchars($_POST['txtTelefono']);
        $select = htmlspecialchars($_POST['select']);
        $selectCod = htmlspecialchars($_POST['selectCod']);
        $comentarios = htmlspecialchars($_POST['txtComentarios']);

        $message = "Nombre: $nombre\n";
        $message .= "Email: $email\n";
        $message .= "Teléfono: $telefono\n";
        $message .= "Marca: $select\n";
        $message .= "Código: $selectCod\n";
        $message .= "Comentarios:\n$comentarios\n";

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP (por ejemplo, Gmail)
            $mail->SMTPAuth = true;
            $mail->Username = 'milihuellas06@gmail.com'; // Tu correo
            $mail->Password = 'lczb xhtc noul cnfn'; // Tu contraseña
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('milihuellas06@gmail.com', 'Milihuellas');
            $mail->addAddress('milihuellas06@gmail.com'); // Destinatario
            $mail->Subject = 'Personalizado Milihuellas';
            $mail->Body = $message;

            // Enviar correo
            $mail->send();
            echo "<script>alert('¡Formulario enviado con éxito!'); window.location.href = '../index.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Error al enviar el correo: {$mail->ErrorInfo}');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milihuellas</title>
    <link rel="icon" href="<?php echo URL;?>/../img/Logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/personalizados.css">

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
        <!-- Columna de marcas -->
        <div class="marcas">
            <h3>Nuestras marcas</h3>
            <ul>
                <li><a href="Adidas.php">Adidas</a></li>
                <li><a href="Nike.php">Nike</a></li>
                <li><a href="Puma.php">Puma</a></li>
                <li><a href="Skechers.php">Skechers</a></li>
                <li><a href="Reebok.php">Reebok</a></li>
                <li><a href="UnderArmour.php">Under Armour</a></li>
                <li><a href="Fila.php">Fila</a></li>
            </ul>
            <a href="../index.php"><img src="../img/iconos/icons8-volver-64.png" alt="Volver"></a>
        </div>

        <!-- Columna del formulario -->
        <div class="personalizado">
            <h3>!Dejanos saber que quieres!</h3>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="names">Nombre y apellido</label>
                    <input type="text" id="names" name="txtNames" required placeholder="Nombres y apellidos">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="txtEmail" required placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="txtTelefono" required placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <select id="marca" name="select">
                        <option value="ADIDAS">Adidas</option>
                        <option value="NIKE">Nike</option>
                        <option value="PUMA">Puma</option>
                        <option value="SKECHERS">Skechers</option>
                        <option value="REEBOK">Reebok</option>
                        <option value="UNDER ARMOUR">Under Armour</option>
                        <option value="FILA">Fila</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cod">Codigo</label>
                    <select id="codigo" name="selectCod">
                        <option value="n041">n041</option>
                        <option value="n042">n042</option>
                        <option value="n043">n043</option>
                        <option value="n044">n044</option>
                        <option value="n045">n045</option>
                        <option value="n046">n046</option>
                        <option value="n047">n047</option>
                        <option value="n048">n048</option>
                        <option value="n049">n049</option>
                        <option value="m0851">m0851</option>
                        <option value="m0852">m0852</option>
                        <option value="m0853">m0853</option>
                        <option value="m0854">m0854</option>
                        <option value="m0855">m0855</option>
                        <option value="m0856">m0856</option>
                        <option value="m0857">m0857</option>
                        <option value="m0858">m0858</option>
                        <option value="m0859">m0859</option>
                        <option value="h0361">h0361</option>
                        <option value="h0362">h0362</option>
                        <option value="h0363">h0363</option>
                        <option value="h0364">h0364</option>
                        <option value="h0365">h0365</option>
                        <option value="h0366">h0366</option>
                        <option value="h0367">h0367</option>
                        <option value="h0368">h0368</option>
                        <option value="h0369">h0369</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comentarios">Comentarios</label>
                    <textarea id="comentarios" name="txtComentarios" maxlength="500"
                        placeholder="Escribe tus comentarios aquí"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="inner-footer">
            <div>
                <img src="../img/redes/icons8-reloj.gif" alt="Horario" width="20" height="20" />
            </div>
            <div>Lunes a Sabado 10:00 a.m. a 8:00 p.m.</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="../email.php"><img src="../img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" />
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