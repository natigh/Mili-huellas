<?php
    session_start();
    require_once("config.php");

    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    require '../PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Procesar acciones de aumentar o disminuir cantidad
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'increase' && isset($_POST['index'])) {
            $index = $_POST['index'];
            if (isset($_SESSION['carrito'][$index])) {
                $_SESSION['carrito'][$index]['cantidad']++; // Aumentar cantidad
            }
        } elseif ($action === 'decrease' && isset($_POST['index'])) {
            $index = $_POST['index'];
            if (isset($_SESSION['carrito'][$index])) {
                $_SESSION['carrito'][$index]['cantidad']--; // Disminuir cantidad
                if ($_SESSION['carrito'][$index]['cantidad'] <= 0) {
                    unset($_SESSION['carrito'][$index]); // Eliminar si la cantidad es 0
                    $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexar el array
                }
            }
        } elseif ($action === 'clear') {
            // Limpiar todo el carrito
            unset($_SESSION['carrito']);
        } elseif ($action === 'send') {
            $nombre = htmlspecialchars($_POST['txtNames']);
            $email = htmlspecialchars($_POST['txtEmail']);
            $telefono = htmlspecialchars($_POST['txtTelefono']);

            $message = "<h1>Nombre: $nombre\n</h1>";
            $message .= "<h2>Email: $email\n</h2>";
            $message .= "<p>Teléfono: $telefono\n</p>";
            $message .= "\n\n\n\n";

            if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
                $total = 0;
                $message .= "<table id='carrito' border='1'>";
                $message .= "<tr><th>Código</th><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Marca</th></tr>";
                $message .= "<tbody>";
                foreach ($_SESSION['carrito'] as $producto) {
                    $message .= "<tr>";
                    $message .= "<td>" . $producto['codigo'] . "</td>";
                    $message .= "<td>" . $producto['nombre'] . "</td>";
                    $message .= "<td>$" . $producto['precio'] . "cop</td>";
                    $total += $producto['precio'] * $producto['cantidad'];
                    $message .= "<td>" . $producto['cantidad'] . "</td>";
                    $message .= "<td>" . $producto['marca'] . "</td>";
                    $message .= "</tr>";

                }
                $message .= "</tbody>";
                $message .= "</table>";
                $message .= "\n\n\n\n";
                $message .= "<h2>Total: $" . $total . "cop</h2>";
            }


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
                $mail->Subject = 'Compra Milihuellas';
                $mail->isHTML(true); // Establecer el formato del correo como HTML
                $mail->Body = $message;

                // Enviar correo
                $mail->send();
                echo "<script>alert('Compra enviada.'); window.location.href = 'index.php';</script>";
            } catch (Exception $e) {
                echo "<script>alert('Error al enviar el correo: {$mail->ErrorInfo}');</script>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milihuellas</title>
    <link rel="icon" href="<?php echo URL;?>/img/Logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/ListaCompras.css">

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
                <a id="inicio" href="./index.php">Inicio</a>
                <a id="nosotros" href="./AboutUs.php">Conócenos</a>
                <button id="wsp"><a href="https://web.whatsapp.com/" target="_blank"><img
                            src="./img/redes/icons8-whatsapp.gif" alt="whatsapp" /></a></button>
                <button id="compra"><a href="./ListaCompras.php"><img src="./img/redes/icons8-comprar.gif"
                            alt="listaCompra"></a></button>
            </nav>
        </div>
    </header>
    <section>
        <div>
            <div>
                <h1>Carrito de Compras</h1>
            </div>
            <div class="c-f">
                <?php
                    if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
                        $index = 0; // Inicializar el índice
                        $total = 0; // Inicializar el total
                        echo "<table id='carrito'>";
                        echo "<tr><th>Código</th><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Marca</th><th>Acciones</th></tr>";
                        foreach ($_SESSION['carrito'] as $producto) {
                            echo "<tr>";
                            echo "<td>" . $producto['codigo'] . "</td>";
                            echo "<td>" . $producto['nombre'] . "</td>";
                            echo "<td>" . $producto['precio'] . "</td>";
                            echo "<td>" . $producto['cantidad'] . "</td>";
                            $total += $producto['precio'] * $producto['cantidad']; // Calcular el total
                            echo "<td>" . $producto['marca'] . "</td>";
                            echo "<td>";
                            echo "<form method='POST' action=''>";
                            echo "<input type='hidden' name='index' value='" . $index . "'>";
                            echo "<button class='btn-mas' type='submit' name='action' value='increase'>+</button>";
                            echo "<button class='btn-menos' type='submit' name='action' value='decrease'>-</button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";

                            $index++; // Incrementar el índice para el siguiente producto
                        }
                        echo "</table>";

                        echo "<h2>Total: $" . $total . "cop</h2>";

                        // Botón "Limpiar Todo"
                        echo "<form method='POST' action='' class='form-clear'>";
                        echo "<button class='actbtn' type='submit' name='action' value='clear'>Limpiar Todo</button>";
                        echo "</form>";
                    } else {
                        echo "<p>No hay productos en el carrito.</p>";
                    }
                
                ?>
            </div>
            <div class="form-compras">
                <h2>Contacto</h2>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="names">Nombre completo</label>
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
                    <button class='actbtn' type='submit' name='action' value='send'>Enviar</button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="inner-footer">
            <div>
                <img src="img/redes/icons8-reloj.gif" alt="Horario" width="20" height="20" />
            </div>
            <div>Lunes a Sabado 10:00 a.m. a 8:00 p.m.</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="email.php"><img src="img/redes/icons8-mensaje.gif" alt="e-mail" width="20" height="20" />
            </div>
            <div>Contacto: Milihuellas06@gmail.com</div>
        </div>
        <div class="inner-footer">
            <div>
                <a href="preguntas.php">
                    <img src="img/redes/icons8-pregunta.gif" alt="preguntas frecuentes" width="20" height="20" />
                </a>
            </div>
            <div>Preguntas Frecuentes</div>
        </div>
    </footer>
</body>

</html>