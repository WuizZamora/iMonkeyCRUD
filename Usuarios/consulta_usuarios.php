<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="Images/logo.ico"/>
</head>
<body id="body_consulta">
    <h1>
        Obteniendo datos...
    </h1>
        <table border= 0 style="width: 100%;" >
            <tr>
                <th>
                    NOMBRE
                </th>
                <th>
                    NO_EMPLEADO    
                </th>
                <th>
                    USUARIO
                </th>
            </tr>
        <?php
            include('conection.php');
            //CONSULTA A LA BD
            $consulta_usuarios= "SELECT nombres, usuario, no_empleado  FROM Datos_Personales";
            $usuarios_consultados=odbc_exec($link2,$consulta_usuarios);
            
            //IMPRIME TODOS LOS CAMPOS DE LAS FILAS EXISTENTES 
            while($row=odbc_fetch_array($usuarios_consultados)){
                echo 
                "<tr>".
                "<td>".$row['nombres']."</td>".
                "<td>".$row['no_empleado']."</td>".
                "<td>".$row['usuario']."</td>
                </tr>";
            }
        ?>
        </table>
</body>
</html>



