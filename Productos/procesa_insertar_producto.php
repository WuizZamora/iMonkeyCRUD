<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR PRODUCTO | iMonkey</title>
    <link rel="stylesheet" href="style_procesa_insertar_producto.css">
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
    <main class="modificar_producto">
        <?php
        include('conection.php');

        //SE OBTIENEN LOS DATOS DEL HTML, EL NAME DEL INPUT SE LO ASIGNAMOS A UNA VARIABLE
        $sku = $_POST['SKU'];
        $producto = $_POST['PRODUCTO'];
        $precio = $_POST['PRECIO'];

        //SE LLENAN LOS CAMPOS DE LA TABLA
        $insertar_producto="INSERT INTO Producto values ($sku, '$producto',$precio)";
            odbc_exec($link2, $insertar_producto);

            echo "<h1>¡PRODUCTO AGREGADO!</h1>";

        //CONSULTA A LA BD
        $consulta_producto="SELECT sku, producto, precio FROM Producto WHERE sku = '$sku'";
        $mostrar_producto=odbc_exec($link2, $consulta_producto);
        $SKU_UPDATE="";

        //IMPRIME LA RESPUESTA DE LA BD
        $row = odbc_fetch_array($mostrar_producto);
            $SKU_UPDATE=$row['sku'];
            echo "SKU: <a href='update.php?actualiza=$SKU_UPDATE'>" . $row['sku'] . "<br></a>";
            echo "Producto: " . $row['producto'] . "<br>";
            echo "Precio: " . $row['precio'] . "<br>";
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