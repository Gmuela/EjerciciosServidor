<?php

    require_once "../ej1/ej1.php";

    

?>

<html>
    <head>    
        <meta charset="utf-8"/>
        
        <script>
        
            function masVerbos(){
                
                var verbo=document.getElementById("verbo").value;
                var verbo=document.getElementById("verbo").value;
                document.getElementById("verbo").value="";
                
                document.getElementById("todosVerbos").value+="&"+verbo;
                
                
            }
        
        </script>
        
    </head>
<body>
    
    <h2>Introduce un verbo</h2> 
    <br/>
    <form method="post" action="ej2_2.php">
    <input type="text" name="verbo" id="verbo">
    <br/>
    <input type="button" value="Más verbos" onclick="masVerbos()"/> <input type="submit" value="Conjugar"/>
    <input type="hidden" value="" name="todosVerbos" id="todosVerbos"/>
    </form>
    
    
</body>
</html>