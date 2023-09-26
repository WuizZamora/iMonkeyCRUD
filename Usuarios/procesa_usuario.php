<?php
    include('conection.php');

    //SE OBTIENEN LOS DATOS DEL HTML, EL NAME DEL INPUT SE LO ASIGNAMOS A UNA VARIABLE
    echo " Obteniendo datos... <br><br>";
    $userIn = $_POST['USUARIO'];
    $passIn = $_POST['PASS'];

    //PETICIÓN A LA BD
    $usuario_ingresado= "SELECT usuario, pass FROM Usuarios WHERE
                        usuario='$userIn' and pass='$passIn'";
    $consulta_usuario=odbc_exec($link2, $usuario_ingresado);
    
    //LE ASIGNAMOS A UNA VARIABLE LA RESPUESTA DE LA BASE DE DATOS
    $row = odbc_fetch_array($consulta_usuario);
        $usuario_verificado = $row['usuario'];
        $pass_verificado = $row['pass'];

    //RESPUESTA DE LA BD
    if($usuario_verificado!=''){
        header("Location: index_su.php");
        exit();
    }else{
        echo "
        <script>
                alert('Usuario o contraseña incorrectos');
                window.location.href = 'index.php';
        </script>
        ";
    }
?>