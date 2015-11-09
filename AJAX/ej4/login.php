<?php

    $users=["guillermo"=>"alumno"];

    $return="";

    if(isset($_REQUEST["user"]) && isset($_REQUEST["pass"])){  
        
        if($users[$_REQUEST["user"]]==$_REQUEST["pass"]){
            
            header('Location: ej4.html');
            
        }
        
        else{
        
            header('Location: error.html');
        }
        
    }
       
    else{
        
        echo "Variables no iniciadas";
    }
    

?>