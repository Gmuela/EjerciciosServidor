<?php

    include("utilHTML.php");

    session_start();

    $_SESSION["activo"]=1;

    pintarLista();
    
    if(isset($_SESSION["nombre"])){
        
        $nombre=$_SESSION["nombre"];        
    }

    else{
    
        $nombre="";    
    }

    if(isset($_SESSION["apellidos"])){
        
        $apellidos=$_SESSION["apellidos"];        
    }

    else{
        
        $apellidos="";        
    }

    if(isset($_SESSION["fecha"])){
        
        $fecha=$_SESSION["fecha"];        
    }

    else{
        
        $fecha="";
    }

    if(isset($_SESSION["genero"])){
        
        $genero=$_SESSION["genero"];        
    }

    else{
        
        $genero="";        
    } 
?>

<html>
    <head>
    
        <style>        
            input{                
                margin-top: 5px;                
            }            
        </style>  
    </head>
    <body>
    
        <fieldset>
        
        <legend>Datos Personales</legend>
            
        <form action="form2.php" method="get">
            
        Nombre <input type="text" name="nombre" value="<?=$nombre?>"/> 
        Apellidos <input type="text" name="apellidos" value="<?=$apellidos?>"/>
        </br>
        Fecha de nacimiento <input type="text" name="fecha" value="<?=$fecha?>"/>
        </br>
        Género -> <?=pintarRadio("genero")?>
        </br>   
        Nacionalidades <select multiple="multiple" name="nacion[]">
    
            <?=pintarSelectMult()?>            
    
        </select>    
        </br>
        <input type="submit" value="Grabar información e ir al paso 2. Datos Profesionales"/>

        </form>
        </fieldset>  
    </body>
</html>