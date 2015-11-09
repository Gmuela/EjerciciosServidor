<?php

    include("utilHTML.php");

    session_start();

    grabaDatos();

    $_SESSION["activo"]=3;

    pintarLista();

    if(isset($_SESSION["cuenta"])){

            $cuenta=$_SESSION["cuenta"];        
        }

        else{

            $cuenta="";
        }

    

?>

<html>
    <head>
    
        <style>        
            input,textarea{                
                margin-top: 5px;                
            }            
        </style>  
    </head>
    <body>
    
    <fieldset>
        
        <legend>Datos Bancarios</legend>
        <form action="form4.php" method="post">
        
        
        Cuenta corriente <input type="text" name="cuenta" value="<?=$cuenta?>"/> 
        
    
        <input type="submit" value="Grabar información e ir al resumen final."/>
    
    </form>
    </fieldset>
    
    
    </body>


</html>