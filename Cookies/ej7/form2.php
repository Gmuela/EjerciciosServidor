<?php  

    include("utilHTML.php");

    session_start();

    grabaDatos();

    $_SESSION["activo"]=2;

    pintarLista();

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
        
        <legend>Datos Profesionales</legend>
        <form action="form3.php" method="post">
        
        Departamento <select name="depart">
            
            <?=pintarSelect()?>
            
        </select>
        </br> 
        Salario <input type="text" name="salario" value="<?=$salario?>"/> 
        </br>
        Comentarios <textarea name="comentarios"><?=$comentarios?></textarea>
        
        </br>
    
        <input type="submit" value="Grabar información e ir al paso 2. Datos Bancarios"/>
    
    </form>
    </fieldset>
    
    
    </body>


</html>