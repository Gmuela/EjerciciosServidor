<?php


    function crearBandera(){
        
         $banderas=["es","jp","us"];
        
        if(isset($_COOKIE["bandera"])){          
            
            foreach($banderas as $valor){
                
                if($_COOKIE["bandera"]==$valor){

                echo "<img src=\"img/$valor.png\" width=\"27\" height=\"18\"/><input type=\"radio\" name=\"bandera\" value=\"$valor\" checked=\"checked\"/>";
                }

                else{

                    echo "<img src=\"img/$valor.png\" width=\"27\" height=\"18\"/><input type=\"radio\" name=\"bandera\" value=\"$valor\"/>";
                }     
            }           
        }
        
        else{
            
            foreach($banderas as $valor){
            
                echo "<img src=\"img/$valor.png\" width=\"27\" height=\"18\"/><input type=\"radio\" name=\"bandera\" value=\"$valor\"/>";
            }            
        }  
    }

    $users=["usuario"=>"guillermo","pass"=>"alumno"];

    if(isset($_REQUEST)){
        
        if($_REQUEST["user"]==$users["usuario"] && $_REQUEST["pass"]==$users["pass"]){
            
            setcookie("usuario",$_REQUEST["user"]);
            if(isset($_COOKIE["cont"])){
                
                setcookie("cont",$_COOKIE["cont"]+1);
                
                echo "Conectado como <b>".$_REQUEST["user"]."</b>. Número de visitas ".$_COOKIE["cont"];                
            }
            
            else{
                
              setcookie("cont","2");
                
                echo "Conectado como <b>".$_REQUEST["user"]."</b>. Primera visita";                
            }
            
            echo "<form action=\"login.php\" method=\"post\"";
            echo "<br/><br/>";
            
            crearBandera();
            
            echo "<br/><br/>";          
            echo "<input type=\"submit\" value=\"Desconectar\" />";
            echo "</form>";           
        }
        
        else{
            
            echo "Usuario/Clave incorrectos";           
        }        
    }
?>