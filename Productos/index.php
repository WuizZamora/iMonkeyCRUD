<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | iMonkey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../Images/Productos.ico" type="image/x-icon">
</head>
<body>
    <header>
        <figure>
            <a href="../index.php">
                <img src="../Images/iMONKEY_LOGO_SF.png" class="logo_header" alt="Logo iMonkey">
            </a>
        </figure>
        <nav> 
            <ul class="main-nav">
                <li class="main-nav__item"><a href="../Usuarios/index.php">Ingresa/Registrate</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table border=0>
            <tr>
                <th>
                    SKU:
                </th>
                <th>
                    PRODUCTO:    
                </th>
                <th>
                    PRECIO:
                </th>
            </tr>

            <?php
                include('conection.php');
                //CONSULTA A LA BD
                $consulta_producto="SELECT sku, producto, precio FROM Producto";
                $mostrar_producto=odbc_exec($link2, $consulta_producto);

                while($row=odbc_fetch_array($mostrar_producto)){
                    echo 
                    "<tr class='tabla_productos'>".
                    "<td>".$row['sku']."</td>".
                    "<td>".$row['producto']."</td>".
                    "<td> $ ".$row['precio'].".00 </td>
                    </tr>";
                }
            ?>
        </table>
    </main>

</body>
</html>
