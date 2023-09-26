<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMonkey | Inicio </title>
    <link rel="stylesheet" href="style_su.css">
    <link rel="shortcut icon" href="../Images/iMONKEY_LOGO_SF.ico" type="image/x-icon">
</head>
<body>
    <header>
        <figure>
                <img src="../Images/Monkey_team.png" class="logo_header" alt="Logo iMonkey">
        </figure>
        <nav> 
            <ul class="main-nav">
                <li class="main-nav__item"><a href="../Productos/insertar_producto.php">Productos</a></li>
                <li class="main-nav__item"><a href="../index.php">Salir</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p>
            <strong>
                Monkey Team <br> 
            </strong>
                Modo administrador <br>
        </p>
        <h3>
            AGREGAR USUARIOS:
        </h3>
        <section class="nuevo-usuario">
            <form name="nuevo-usuario-datos" action="insertar_usuarios.php" method="post">
                <p>NOMBRE *: </p>  
                <input type="text" name="NOMBRES" required maxlength="15" size="15">
                <p>APELLIDO *: </p>  
                <input type="text" name="APELLIDOS" required maxlength="15" size="15">
                <p>FECHA DE NACIMIENTO *: </p>  
                <input type="date" name="FECHA_NACIMIENTO" required>
                <p>SEXO *: </p>  
                <input type="text" name="SEXO" required maxlength="8" size="8 " placeholder="MUJER/HOMBRE">
                <p>NO DE EMPLEADO *: </p>  
                <input type="number" name="NO_EMPLEADO" required maxlength="15" size="15">
                <p>PUESTO *: </p>  
                <input type="text" name="PUESTO" required maxlength="12" placeholder="GERENTE/COORDINADO/ANALISTA"> <br>
                <br>
                <!-- </form>
                <form name="nuevo-usuario" action="#" method="POST"> -->
                    <p>GENERA UN USUARIO (DE 8 CARACTERES)*: </p>  
                    <input type="text" name="USUARIO" required maxlength="8">
                    <p>GENERA UNA CONTRASEÑA (DE 12 CARACTERES)*: </p>  
                    <input type="password" name="PASS" required maxlength> <br>
                    <br>
                    <!-- <input type="submit" value="Generar"> -->
                    <input type="submit" value="Guardar" id="Guardar">
            </form>
        </section>
        <section class="Proximamente">
            
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