<?php
    require_once("config.php");

    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    require '../PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir los datos del formulario
        $nombre = htmlspecialchars($_POST['txtNames']);
        $email = htmlspecialchars($_POST['txtEmail']);
        $telefono = htmlspecialchars($_POST['txtTelefono']);
        $comentarios = htmlspecialchars($_POST['txtComentarios']);

        $message = "Nombre: $nombre\n";
        $message .= "Email: $email\n";
        $message .= "Teléfono: $telefono\n";
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
            $mail->Subject = 'Contacto Milihuellas';
            $mail->Body = $message;

            // Enviar correo
            $mail->send();
            echo "<script>alert('¡Formulario enviado con éxito!'); window.location.href = 'index.php';</script>";
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
    <link rel="icon" href="<?php echo URL;?>/img/Logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/email.css">
        
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
                <button id="wsp"><a href="https://wa.me/3013487174" target="_blank"><img src="img/redes/icons8-whatsapp.gif" alt="whatsapp"/></a></button>
                <button id="compra"><a href="ListaCompras.php"><img src="img/redes/icons8-comprar.gif" alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>

    <form method="POST" action="">
        <h3>!Dejanos un mensaje con tus preguntas!</h3>
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
        <label for="comentarios">Comentarios</label>
        <textarea id="comentarios" name="txtComentarios" maxlength="500" placeholder="Escribe tus comentarios aquí"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

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