<?php

    ini_set("session.use_trans_sid","1");
    ini_set("session.use_cookies","0");
    ini_set("session.use_only_cookies","0");

    session_start();

    if(isset($_SESSION["cont"])){
        
      $_SESSION["cont"]+=1;  
        
    }
    
    else{
   
        $_SESSION["cont"]=1;
    
    }
    
    echo "Visita número ".$_SESSION["cont"];
    echo "<form action=\"ej5.php\" method=\"get\">";
    echo "<input type=\"submit\" value=\"Refresca\"/>";    
    echo "</form>";



?>