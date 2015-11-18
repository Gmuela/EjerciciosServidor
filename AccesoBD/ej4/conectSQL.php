<?php
function conectarMySQL($schema="empleados", $user="root", $pwd="", $host="localhost"){
        
    try{
            
        $dsn="mysql:host=$host;dbname=$schema";

        $db=new PDO($dsn,$user,$pwd);

        return $db;         
    }

    catch (PDOException $e){

        echo "Error al conectar a la Base de Datos";

        die();
    }
   
        
}
?>
