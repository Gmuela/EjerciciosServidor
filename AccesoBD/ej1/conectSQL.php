<?php
function conectarMySQL($schema="producto", $user="root", $pwd="", $host="localhost"){
        
    try{
            
        $dsn="mysql:host=$host;dbname=$schema";

        $db=new PDO($dsn,$user,$pwd);

        echo "Conectado<br/>";

        return $db;         
    }

    catch (PDOException $e){

        echo "Algo malo ha pasado";

        die();
    }
   
        
}
?>
