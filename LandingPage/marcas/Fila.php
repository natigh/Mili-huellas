<?php
    session_start();
    require_once("../config.php");

    $fila_children = [
        (object)[
            "id" => "n041",
            "code" => "Cod.N041",
            "price" => 250000,
            "priceFormat" => "$250.000cop",
            "img" => "../img/fila/n1.png"
        ],
        (object)[
            "id" => "n042",
            "code" => "Cod.N042",
            "price" => 270000,
            "priceFormat" => "$270.000cop",
            "img" => "../img/fila/n2.png"
        ],
        (object)[
            "id" => "n043",
            "code" => "Cod.N043",
            "price" => 230000,
            "priceFormat" => "$230.000cop",
            "img" => "../img/fila/n3.png"
        ],
        (object)[
            "id" => "n044",
            "code" => "Cod.N044",
            "price" => 240000,
            "priceFormat" => "$240.000cop",
            "img" => "../img/fila/n4.png"
        ],
        (object)[
            "id" => "n045",
            "code" => "Cod.N045",
            "price" => 290000,
            "priceFormat" => "$290.000cop",
            "img" => "../img/fila/n5.png"
        ],
        (object)[
            "id" => "n046",
            "code" => "Cod.N046",
            "price" => 250000,
            "priceFormat" => "$250.000cop",
            "img" => "../img/fila/n6.png"
        ],
        (object)[
            "id" => "n047",
            "code" => "Cod.N047",
            "price" => 260000,
            "priceFormat" => "$260.000cop",
            "img" => "../img/fila/n7.png"
        ],
        (object)[
            "id" => "n048",
            "code" => "Cod.N048",
            "price" => 240000,
            "priceFormat" => "$240.000cop",
            "img" => "../img/fila/n8.png"
        ],
        (object)[
            "id" => "n049",
            "code" => "Cod.N049",
            "price" => 220000,
            "priceFormat" => "$220.000cop",
            "img" => "../img/fila/n9.png"
        ]
    ];

    $fila_women = [
        (object)[
            "id" => "m0851",
            "code" => "Cod.M0851",
            "price" => 350000,
            "priceFormat" => "$350.000cop",
            "img" => "../img/fila/m1.png"
        ],
        (object)[
            "id" => "m0852",
            "code" => "Cod.M0852",
            "price" => 370000,
            "priceFormat" => "$370.000cop",
            "img" => "../img/fila/m2.png"
        ],
        (object)[
            "id" => "m0853",
            "code" => "Cod.M0853",
            "price" => 330000,
            "priceFormat" => "$330.000cop",
            "img" => "../img/fila/m3.png"
        ],
        (object)[
            "id" => "m0854",
            "code" => "Cod.M0854",
            "price" => 340000,
            "priceFormat" => "$340.000cop",
            "img" => "../img/fila/m4.png"
        ],
        (object)[
            "id" => "m0855",
            "code" => "Cod.M0855",
            "price" => 390000,
            "priceFormat" => "$390.000cop",
            "img" => "../img/fila/m5.png"
        ],
        (object)[
            "id" => "m0856",
            "code" => "Cod.M0856",
            "price" => 350000,
            "priceFormat" => "$350.000cop",
            "img" => "../img/fila/m6.png"
        ],
        (object)[
            "id" => "m0857",
            "code" => "Cod.M0857",
            "price" => 360000,
            "priceFormat" => "$360.000cop",
            "img" => "../img/fila/m7.png"
        ],
        (object)[
            "id" => "m0858",
            "code" => "Cod.M0858",
            "price" => 340000,
            "priceFormat" => "$340.000cop",
            "img" => "../img/fila/m8.png"
        ],
        (object)[
            "id" => "m0859",
            "code" => "Cod.M0859",
            "price" => 320000,
            "priceFormat" => "$320.000cop",
            "img" => "../img/fila/m9.png"
        ]
    ];

    $fila_men = [
        (object)[
            "id" => "h0361",
            "code" => "Cod.H0361",
            "price" => 350000,
            "priceFormat" => "$350.000cop",
            "img" => "../img/fila/h1.png"
        ],
        (object)[
            "id" => "h0362",
            "code" => "Cod.H0362",
            "price" => 370000,
            "priceFormat" => "$370.000cop",
            "img" => "../img/fila/h2.png"
        ],
        (object)[
            "id" => "h0363",
            "code" => "Cod.H0363",
            "price" => 330000,
            "priceFormat" => "$330.000cop",
            "img" => "../img/fila/h3.png"
        ],
        (object)[
            "id" => "h0364",
            "code" => "Cod.H0364",
            "price" => 340000,
            "priceFormat" => "$340.000cop",
            "img" => "../img/fila/h4.png"
        ],
        (object)[
            "id" => "h0365",
            "code" => "Cod.H0365",
            "price" => 390000,
            "priceFormat" => "$390.000cop",
            "img" => "../img/fila/h5.png"
        ],
        (object)[
            "id" => "h0366",
            "code" => "Cod.H0366",
            "price" => 350000,
            "priceFormat" => "$350.000cop",
            "img" => "../img/fila/h6.png"
        ],
        (object)[
            "id" => "h0367",
            "code" => "Cod.H0367",
            "price" => 360000,
            "priceFormat" => "$360.000cop",
            "img" => "../img/fila/h7.png"
        ],
        (object)[
            "id" => "h0368",
            "code" => "Cod.H0368",
            "price" => 340000,
            "priceFormat" => "$340.000cop",
            "img" => "../img/fila/h8.png"
        ],
        (object)[
            "id" => "h0369",
            "code" => "Cod.H0369",
            "price" => 320000,
            "priceFormat" => "$320.000cop",
            "img" => "../img/fila/h9.png"
        ]
    ];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $marca = "Fila";

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        $producto_existente = false;
        foreach ($_SESSION['carrito'] as &$producto) {
            if ($producto['codigo'] === $codigo) {
                $producto['cantidad'] += $cantidad; // Incrementar la cantidad
                $producto_existente = true;
                break;
            }
        }

        // Si el producto no existe, agregarlo al carrito
        if (!$producto_existente) {
            $_SESSION['carrito'][] = [
                'codigo' => $codigo,
                'nombre' => $nombre,
                'precio' => $precio,
                'cantidad' => $cantidad,
                'marca' => $marca
            ];
        }

        echo '<script>alert("Producto agregado al carrito")</script>';
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
                <button id="compra"><a href="../ListaCompras.php"><img src="../img/redes/icons8-comprar.gif"
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
            <?php
                foreach ($fila_children as $product) {
                    echo '<div class="n">';
                    echo '<img src="' . $product->img . '" alt="' . $product->id . '">';
                    echo '<h3>' . $product->code . '</h3>';
                    echo '<h3>' . $product->priceFormat . '</h3>';
                    echo '<form method="POST" action="">';
                    echo '<input type="hidden" name="codigo" value="' . $product->id . '">';
                    echo '<input type="hidden" name="nombre" value="' . $product->code . '">';
                    echo '<input type="hidden" name="precio" value="' . $product->price . '">';
                    echo '<label for="cantidad">Cantidad:</label>';
                    echo '<input type="number" id="cantidad" name="cantidad" value="1" min="1">';
                    echo '<button type="submit">Agregar al carrito</button>';
                    echo '</form>';
                    echo '</div>';
                }
            ?>
        </div>
    </section>
    <div class="fila-fem">
        <div></div>
        <div class="mujer">
            <div><h2>Mujer - Fila</h2></div>
            <div></div>
            <div></div>
            <?php
                foreach ($fila_women as $product) {
                    echo '<div class="m">';
                    echo '<img src="' . $product->img . '" alt="' . $product->id . '">';
                    echo '<h3>' . $product->code . '</h3>';
                    echo '<h3>' . $product->priceFormat . '</h3>';
                    echo '<form method="POST" action="">';
                    echo '<input type="hidden" name="codigo" value="' . $product->id . '">';
                    echo '<input type="hidden" name="nombre" value="' . $product->code . '">';
                    echo '<input type="hidden" name="precio" value="' . $product->price . '">';
                    echo '<label for="cantidad">Cantidad:</label>';
                    echo '<input type="number" id="cantidad" name="cantidad" value="1" min="1">';
                    echo '<button type="submit">Agregar al carrito</button>';
                    echo '</form>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <div class="fila-men">
        <div></div>
        <div class="hombre">
            <h2>Hombre - Fila</h2>
            <div></div>
            <div></div>
            <?php
                foreach ($fila_men as $product) {
                    echo '<div class="h">';
                    echo '<img src="' . $product->img . '" alt="' . $product->id . '">';
                    echo '<h3>' . $product->code . '</h3>';
                    echo '<h3>' . $product->priceFormat . '</h3>';
                    echo '<form method="POST" action="">';
                    echo '<input type="hidden" name="codigo" value="' . $product->id . '">';
                    echo '<input type="hidden" name="nombre" value="' . $product->code . '">';
                    echo '<input type="hidden" name="precio" value="' . $product->price . '">';
                    echo '<label for="cantidad">Cantidad:</label>';
                    echo '<input type="number" id="cantidad" name="cantidad" value="1" min="1">';
                    echo '<button type="submit">Agregar al carrito</button>';
                    echo '</form>';
                    echo '</div>';
                }
            ?>
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