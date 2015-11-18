<?php


switch($_GET["origen"]){
        
        case "insertar":
            echo "<h1>Empleado insertado</h1>";
            echo "<br/><input type=\"button\" value=\"Volver al menú\" onclick=\"location.href='menu.html'\"/>";
            break;
        case "borrar":
            echo "<h1>Empleado borrado</h1>";
            echo "<br/><input type=\"button\" value=\"Volver al menú\" onclick=\"location.href='menu.html'\"/>";
            break;
        case "modificar":
            echo "<h1>Empleado modificado</h1>";
            echo "<br/><input type=\"button\" value=\"Volver al menú\" onclick=\"location.href='menu.html'\"/>";
            break;
        case "error":
            echo "<h1>Ha ocurrido un error en su operación</h1>";
            echo "<br/><input type=\"button\" value=\"Volver al menú\" onclick=\"location.href='menu.html'\"/>";
            break;
}


?>