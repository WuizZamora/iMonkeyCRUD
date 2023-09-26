<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS | iMonkey</title>
    <link rel="stylesheet" href="style_insertar_usuarios.css">
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

        //SE OBTIENEN LOS DATOS DEL HTML, EL NAME DEL INPUT SE LO ASIGNAMOS A UNA VARIABLE
        $nombres = $_POST['NOMBRES'];
        $apellidos = $_POST['APELLIDOS'];
        $fecha_nacimiento = $_POST['FECHA_NACIMIENTO'];
        $sexo = $_POST['SEXO'];
        $no_empleado = $_POST['NO_EMPLEADO'];
        $puesto = $_POST['PUESTO'];
        $usuario = $_POST['USUARIO'];
        $pass = $_POST['PASS'];
        
        //SE LLENAN LOS CAMPOS DE LA TABLA Usuarios
        $insertar_usuario = "INSERT INTO Usuarios (usuario, pass) VALUES ('$usuario', '$pass')";
        odbc_exec($link2, $insertar_usuario);
        
        //SE LLENAN LOS CAMPOS DE LA TABLA Datos_Personales
        $insertar_datos_personales = "INSERT INTO Datos_Personales (nombres, apellidos, fecha_nacimiento, sexo, no_empleado, usuario, puesto)
                                     VALUES ('$nombres', '$apellidos', '$fecha_nacimiento', '$sexo', $no_empleado,'$usuario', '$puesto')";
        odbc_exec($link2, $insertar_datos_personales);
        
        
        echo "<h1>¡DATOS GUARDADOS!</h1>";
        
        //CONSULTA A LA BD
        $consulta_usuario = "SELECT nombres, apellidos, fecha_nacimiento, sexo, no_empleado, usuario, puesto FROM Datos_Personales";
        $mostrar_usuario = odbc_exec($link2, $consulta_usuario);
        
        //IMPRIME LA RESPUESTA DE LA BD
        while ($row = odbc_fetch_array($mostrar_usuario)) {
            echo "NOMBRES: " . $row['nombres'] . "<br>";
            echo "APELLIDOS: " . $row['apellidos'] . "<br>";
            echo "FECHA DE NACIMIENTO: " . $row['fecha_nacimiento'] . "<br>";
            echo "SEXO: " . $row['sexo'] . "<br>";
            echo "No DE EMPLEADO: " . $row['no_empleado'] . "<br>";
            echo "PUESTO: " . $row['puesto'] . "<br><br>";
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

