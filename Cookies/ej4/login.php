<html>    
    <body>
        <h2>Tratamiento de cookies</h2>
        
<?php

        if(isset($_COOKIE["usuario"])){
    
            echo "Adiós <b>".$_COOKIE["usuario"]."</b>. Usted no está conectado";    
        }
            
        else{
            
            echo "Primera ejecución. Usted no está conectado";            
        }
        
        if(isset($_REQUEST["bandera"])){
            
            setcookie("bandera",$_REQUEST["bandera"]);           
        }        
?>    
            <form action="ej4.php" method="post">           
        
            Usuario <input type="text" name="user"/>
            </br>
            Clave <input type="password" name="pass"/>
            
            </br>
            </br>
    
            <input type="submit" value="Autenticar"/>
        </form>        
    </body>
</html>
    