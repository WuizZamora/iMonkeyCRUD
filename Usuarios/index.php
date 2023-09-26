<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | iMonkey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../Images/logo.ico" type="image/x-icon">
</head>
<body>
    <header class="main-header">
        <figure>
            <a href="../index.php">
                <img src="./Images/iMONKEY_LOGO_SF.png" class="logo_header" alt="Logo iMonkey">
            </a>
        </figure>
        <nav> 
            <ul class="main-nav">
                <li class="main-nav__item"><a href="../Productos/index.php">Productos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>
            Bienvenid(a)o Monkey Team <br>
            Ingresa tus credenciales
        </h1>
        <div align="center" class="logo_login">
            <img src="Images/Monkey_team.png">
        </div>
    
        <div align="center" class="datos_login">
            <form name="LOGIN" action="procesa_usuario.php" method="post">
                <div id="User">
                    Usuario*: <br>
                        <input type="text" name="USUARIO" maxlength="8" required size="15">
                </div>
                <div id="Pass">
                    Contraseña*: <br>
                        <input type="password" name="PASS" maxlength="8" required size="15">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="boton">
                </div>
            </form>
        </div>    
    </main>
    <footer>
        © 2023 iMonkey. Todos los Derechos Reservados. <br> Hecho con ❤ por Wuiz 
    </footer>
</body>
</html>