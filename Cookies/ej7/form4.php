<?php

 include("utilHTML.php");

    session_start();

    grabaDatos();

    $_SESSION["activo"]=4;

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

    if(isset($_SESSION["nacion"])){
        
        $nacion=$_SESSION["nacion"];        
    }

    else{
                
        $nacion="";
    }

if(isset($_SESSION["depart"])){
        
        $depart=$_SESSION["depart"];        
    }

    else{
    
        $depart="";    
    }

    if(isset($_SESSION["salario"])){
        
        $salario=$_SESSION["salario"];        
    }

    else{
        
        $salario="";        
    }

    if(isset($_SESSION["comentarios"])){
        
        $comentarios=$_SESSION["comentarios"];        
    }

    else{
        
        $comentarios="";
    }

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
            *{                
                margin-top: 5px;                
            }            
        </style>  
    </head>
    
    <body>
    
    <fieldset>
        
        <legend>Datos Personales</legend>        
        Nombre: <b><?=$nombre?></b>
        </br>
        Apellidos: <b><?=$apellidos?></b>
        </br>
        Fecha de nacimiento: <b><?=$fecha?></b>
        </br>
        Género: <b><?=$genero?></b>
        </br>
        Nacionalidades: <?php foreach($nacion as $k=>$v): echo "<b>$v </b>" ?><?php endforeach;?>  

    </fieldset>

    <fieldset>
        
        <legend>Datos Profesionales</legend>        
        Departamento: <b><?=$depart?></b>
        </br> 
        Salario: <b><?=$salario?></b>
        </br>
        Comentarios: <b><?=$comentarios?></b>

    </fieldset>
    
    <fieldset>
        
        <legend>Datos Bancarios</legend>        
        Cuenta corriente: <b><?=$cuenta?></b>
        
    </fieldset>    
    </body>
</html>


