<?php
     ini_set('display_errors',0);
     ini_set('display_startup_errors', 0);
     error_reporting(0);
     function Conectarse()
     {
         $dsn = "Driver={SQL Server};
         Server=WUIZ-PC\MSSQLSERVER01;Database=iMonkey;";
 
         if(!($link = odbc_connect($dsn,'WUIZ','Lazp221819.')))
         {
             echo"Error conectando a la base de datos. ";
             exit();
         }else{
            //echo "Bienvenido a iMonkey";
         }
         return $link;
     }
 
     $link2 = Conectarse(); 
?>