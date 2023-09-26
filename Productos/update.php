<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR PRODUCTO</title>
    <link rel="stylesheet" href="style_update.css">
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

            //SE OBTIENEN EL DATO DEL HTML DE PROCESA_INSERTAR_PRODUCTO PARA ACTUALIZAR
            $recupera_update=$_GET['actualiza'];//COMO HAY UNA ETIQUETA a AL SKU SE LE ASIGNA UNA VARIABLE
            //echo $recupera_update;
            
            //SE HACE LA CONSULTA A LA BD
            $consulta_producto="SELECT sku, producto, precio FROM Producto WHERE sku = '$recupera_update'";
            $mostrar_producto=odbc_exec($link2, $consulta_producto);

            //SE OBTIENEN LOS DATOS DE LA BD Y SE LE ASIGNA UNA VARIABLE
            $row = odbc_fetch_array($mostrar_producto);
            $sku_muestra=$row['sku'];
            $producto_muestra=$row['producto'];
            $precio_muestra=$row['precio'];

            //SE INSERTAN LOS VALORES EN UN FORMULARIO PARA PODER MANIPULARLOS
            echo "
            <form name='PRODUCTOS' action='procesa_actualiza_productos.php' method='post'>
                SKU*:
                <input type='number' name='SKU' maxlength='10' required value='$sku_muestra'><br><br>
                PRODUCTO*:
                <input type='text' name='PRODUCTO' maxlength='25' required value='$producto_muestra'><br><br>
                PRECIO*:
                <input type='number' name='PRECIO' maxlength='10' required value='$precio_muestra'><br><br>
                <input type='submit' value='Guardar'>
                <input type='text' name='recupera_update' value='$recupera_update' hidden>
            </form>";
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
