<?php

require_once "conectSQL.php";

$baseDatos=conectarMySQL();

$select="SELECT * FROM productos";

$resultSelect=$baseDatos->query($select);

if(!$resultSelect){

    $mostrar="Error en la consulta";        
}

else{

    $mostrar="<table><tr><th>Nombre</th><th>Precio</th></tr>";

    foreach($resultSelect as $v){

        $mostrar.="<tr><td>{$v["nombre"]}</td><td>{$v["precio"]}</td></tr>";

    }

    $mostrar.="</table>";
    
    }


?>

<html>   
<body>

    
    <form method="post" action="ej2.php">
    
    Nombre producto<input type="text" name="nombre"/>
    <br/>
    <br/>
    Precio producto<input type="text" name="precio"/>
    <br/>
    <br/>        
    <input type="submit" value="Enviar"/>
    
    </form>
    
    Productos insertados:
    
    <?=$mostrar?>    
    
   
</body>
</html>
