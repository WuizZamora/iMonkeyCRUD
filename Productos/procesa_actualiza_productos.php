<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTO ACUTUALIZADO</title>
    <link rel="stylesheet" href="style_procesa_actualiza_productos.css">
</head>
<body>
<header>
            <figure>
                <a href="../Usuarios/index_su.php">
                    <img src="../Images/Monkey_team.png" class="logo_header" alt="Logo iMonkey">
                </a>
            </figure>
            <nav> 
                <ul class="main-nav">
                    <li class="main-nav__item"><a href="../Productos/insertar_producto.php">Productos</a></li>
                    <li class="main-nav__item"><a href="#Contacto-redes">Contacto</a></li>
                    <li class="main-nav__item"><a href="../index.php">Salir</a></li>
                </ul>
            </nav>
    </header>
    <main>
        <?php
            include('conection.php');
            
            //SE OBTIENEN LOS DATOS DEL FORMULARIO UPDATE.
            $actualiza_sku = $_POST['SKU'];
            $actualiza_producto = $_POST['PRODUCTO'];
            $actualiza_precio = $_POST['PRECIO'];
            $recupera_update = $_POST['recupera_update'];//SKU A ACTUALIZAR

            //SE IMPRIMEN LOS DATOS OBTENIDOS
            echo $actualiza_sku . "<br>";
            echo $actualiza_producto . "<br>";
            echo $actualiza_precio . "<br>";

            //SE HACE EL UPDATE A LA BD
            $actualiza_producto_datos = "UPDATE Producto SET
            sku = '$actualiza_sku',
            producto = '$actualiza_producto',
            precio = '$actualiza_precio'
            WHERE sku = '$recupera_update'";
            $resultado = odbc_exec($link2, $actualiza_producto_datos);
            
            if ($resultado) {
                echo "
                <h1>Los datos se actualizaron correctamente.</h1>";
            } else {
                echo "Ocurrió un error al actualizar los datos.";
            }
        ?>
    </main>
    <footer>
        <strong>
            <p>¡SIGUÉNOS Ó CONTACTANOS!</p>
        </strong>
        <table id="Contacto-redes">
            <tr>
                <td class="redes-sociales">
                    <a href="https://www.facebook.com/profile.php?id=100075959743013">
                        <img src="../Images/fb.png" alt="Facebook">
                    </a>
                </td>
                <td class="redes-sociales">
                    <a href="https://www.instagram.com/loo.pday/">
                        <img src="../Images/insta.png" alt="Instagram">
                    </a>
                </td>
                <td class="redes-sociales">
                    <a href="https://twitter.com/wuiz_zp">
                        <img src="../Images/tw.png" alt="Twitter">
                    </a>
                </td>
                <td class="redes-sociales">
                    <a href="https://wa.me/5583526554">
                        <img src="../Images/whatsapp.png" alt="Whatsapp">
                    </a>
                </td>
                
            </tr>
        </table>
        © 2023 iMonkey. Todos los Derechos Reservados. <br> Hecho con ❤ por Wuiz 
    </footer>
</body>
</html>


