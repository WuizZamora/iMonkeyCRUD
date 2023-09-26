<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="style_eliminar_producto.css">
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
        <h1>
            INGRESA SKU DEL PRODUCTO A ELIMINAR:
        </h1>
        <form action="#" method="post">
            <input type="text" name="SKU" required>
            <input type="submit" value="ELIMINAR">
        </form>
        <?php
            include('conection.php');
            $sku_eliminar = $_POST['SKU'];

            $eliminar_producto = "DELETE FROM Producto WHERE sku = '$sku_eliminar'";
            $resultado = odbc_exec($link2, $eliminar_producto);

            if ($resultado && odbc_num_rows($resultado) > 0) {
                echo "El producto con SKU $sku_eliminar ha sido eliminado.";
            } else {
            echo "No se pudo eliminar el producto.";
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