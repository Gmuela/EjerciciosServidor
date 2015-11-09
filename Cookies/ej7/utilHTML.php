<?php

    function grabaDatos(){
        
        foreach($_REQUEST as $k=>$v){
            
            if(isset($_REQUEST[$k])){
                
                $_SESSION[$k]=$_REQUEST[$k];                
            }         
        }     
    }


    function pintarLista(){
    
        for($i=1;$i<5;$i++){

            if($_SESSION["activo"]==$i){

                echo "<a href=\"form$i.php\"><img style=\"height:5%\" src=\"img/imagen$i.png\"></a><img>";

            }

            else{

                echo "<a href=\"form$i.php\"><img style=\"height:5%; opacity:0.4\" src=\"img/imagen$i.png\"></a><img>";
            }
        } 
    }

    function pintarRadio($name){
        
        $generos=array("Hombre"=>"Hombre","Mujer"=>"Mujer","Otro"=>"Otro");
        
        $result="";
        
        if(isset($_SESSION["genero"])){
            
            foreach($generos as $k=>$genero){
            
                if($_SESSION["genero"]==$genero){

                  $result.="$k<input type=\"radio\" name=\"$name\" value=\"$genero\" checked=\"\checked\"/>"; 

                }

                else{

                    $result.="$k<input type=\"radio\" name=\"$name\" value=\"$genero\"/>";

                } 
            }
        
            return $result;
        }
        
        else{
            
            foreach($generos as $k=>$genero){

                $result.="$k<input type=\"radio\" name=\"$name\" value=\"$genero\"/>";
                 
            }
            
            return $result;
        }  
    }
        
        

    function pintarSelectMult(){
        
       
        $naciones=array("España"=>"España","Francia"=>"Francia","Italia"=>"Italia","Portugal"=>"Portugal");

        $result="";
        
        if(isset($_SESSION["nacion"])){
           
            foreach($naciones as $k=>$nacion){

                if (in_array($nacion,$_SESSION["nacion"])) {

                  $result.="<option value=\"$nacion\" selected=\"selected\">$k</option>"; 

                }

                else{

                    $result.="<option value=\"$nacion\">$k</option>";

                } 
            }

            return $result;            
        }
        
        else{
            
            foreach($naciones as $k=>$nacion){

                
                $result.="<option value=\"$nacion\">$k</option>";
            
            }   
        
            return $result;
        }
    }

function pintarSelect(){
        
       
        $departamentos=array("Marketing"=>"Marketing","Desarrollo"=>"Desarollo","Recursos Humanos"=>"Recursos Humanos","Sistemas"=>"Sistemas");

        $result="";
        
        if(isset($_SESSION["depart"])){
           
            foreach($departamentos as $k=>$depart){

                if ($_SESSION["depart"]==$depart) {

                  $result.="<option value=\"$depart\" selected=\"selected\">$k</option>"; 

                }

                else{

                    $result.="<option value=\"$depart\">$k</option>";

                } 
            }

            return $result;            
        }
        
        else{
            
            foreach($departamentos as $k=>$depart){

                
                $result.="<option value=\"$depart\">$k</option>";
            
            }   
        
            return $result;
        }
    }

    
        
        
    

?>