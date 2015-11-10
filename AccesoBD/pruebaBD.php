<?php

require_once "utilBD.php";

$db=conectarMySQL();

$insert=<<<SQL
    insert into cds(titel,interpret)
    value(?,?)
SQL;

//EJECUCIÓN DIRECTA
    //$db->exec($insert);
    //echo "Insertado<br/>";

    //EJERCUCIÓN PREAPARADA
    //$resultado=$db->prepare($insert);
    //$resultado->execute(["born in the usa","the boss"]);

$insert2=<<<SQL
        insert into cds(titel,interpret)
        value(:titulo,:interprete)
SQL;

//OTRA FORMA DE USAR UNA SENTENCIA PREPARADA

//$resultado=$db->prepare($insert2);
//$resultado->execute([":interprete"=>"hollywood undead",":titulo"=>"Swan Songs"]);

//USO DE BINDPARAM()
/*$resultado=$db->prepare($insert2);
$inter="Michael Jackson";
$titulo="Thriller";
$resultado->bindParam(":titulo",$titulo);
$resultado->bindParam(":interprete",$inter);
$resultado->execute();*/

//CONSULTA SELECT(QUERY)
$consulta="select * from cds";

$resultado=$db->query($consulta);//query devuelve false o la consulta

if(!$resultado){

    echo "Error en la consulta";        
}

else{

    echo "<table><tr><th>Título</th><th>Intéprete</th></tr>";

    foreach($resultado as $v){

        echo "<tr><td>{$v["titel"]}</td><td>{$v["interpret"]}</td></tr>";

    }

    echo "</table>";
    
    }
?>