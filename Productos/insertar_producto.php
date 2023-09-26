<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Productos | iMonkey</title>
    <link rel="stylesheet" href="style_insertar_producto.css"/>
    <link rel="shortcut icon" href="Images/Productos.png">
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
                    <li class="main-nav__item"><a href="../Productos/eliminar_producto.php">Eliminar producto</a></li>
                    <li class="main-nav__item"><a href="../Productos/procesa_insertar_producto.php">Actualizar producto</a></li>
                    <li class="main-nav__item"><a href="../index.php">Salir</a></li>
                </ul>
            </nav>
    </header>
    <main>
        <section class="PRODUCTOS"> 
            <h1>
                INGRESA EL PRODUCTO:
            </h1>
            <form action="procesa_insertar_producto.php" method="post">
                SKU*: <br>
                <input type="number" name="SKU" maxlength="10" required><br><br>
                PRODUCTO*: <br>
                <input type="text" name="PRODUCTO" maxlength="25" required><br><br>
                PRECIO* $: <br>
                <input type="number" name="PRECIO" maxlength="10" required><br><br>
                
                <input type="submit" value="Guardar">
            </form>
        </section>
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
