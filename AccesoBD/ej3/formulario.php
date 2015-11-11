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
    
    <script>
    
        function preparar(){
            
            var nombre=document.getElementById("nombre").value;
            var precio=document.getElementById("precio").value;
                        
            document.getElementById("productos").value+=nombre+"#"+precio+"#";
            
            document.getElementById("preparados").innerHTML+="<tr><td>"+nombre+"</td><td>"+precio+"</td></tr>";
            
            document.getElementById("nombre").value="";
            document.getElementById("precio").value="";
            
        }
    
    </script>
    
    <style>
    
        table,td,th,tr{
            
            border: 2px solid black;
            border-collapse: collapse;
            
        }
    
    
    </style>
    
<body>

    
    <form method="get" action="ej3.php">
    
    Nombre producto<input type="text" name="nombre" id="nombre"/>
    <br/>
    <br/>
    Precio producto<input type="text" name="precio" id="precio"/>
    <br/>
    <br/>        
    <input type="button" value="Preparar" onclick="preparar()"/>
    <input type="submit" value="Insertar"/>
    <input type="hidden" id="productos" name="productos" value=""/>
    
    </form>
    
    Productos preparados para insertar:<br/><br/>
    <table id="preparados"><table>
    
    Productos insertados
    
    <?=$mostrar?>
    
   
</body>
</html>
