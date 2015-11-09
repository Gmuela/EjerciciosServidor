<?php

    function resaltar($texto){
        
        return "<h1>$texto</h1>";
        
    }

    function eligeH($texto,$h){
        
        return "<h$h>$texto</h$h>";
        
    }

    function ponerParrafos($texto){
        
        return "<p>$texto</p>";
        
    }

    function crearInputText($tipo,$nombre){
        
        return "<input type=\"$tipo\" name=\"$nombre\"/>";
        
    }

    function crearInputRadioCheck($tipo,$nombre,$valor){
        
        return "<input type=\"$tipo\" name=\"$nombre\" value=\"$valor\"/>";
        
    }

    function pintarRadio($nombre,$arrayValueLabel,$seleccionado){
        
        foreach($arrayValueLabel as $clave => $valor){
            
            if($seleccionado==$clave){
                
                echo "<input type=\"radio\" name=\"$nombre\" value=\"$valor\" id=\"$valor\" checked=\"checked\"/>";
                
            }
            
            else{
            
                echo "<input type=\"radio\" name=\"$nombre\" value=\"$valor\" id=\"$valor\"/>";
                
            }
            
            echo "<label for=\"$clave\">$valor</label><br/>";
            
        }
            
    }

    function pintarCheck($nombre,$arrayValueLabel){

        foreach($arrayValueLabel as $clave => $valor){
            
            echo "<input type=\"checkbox\" name=\"$nombre\" value=\"$valor\" id=\"$valor\"/>";

            echo "<label for=\"$clave\">$valor</label><br/>";

        }

    }
    
    function pintarCheckEnh($nombre,$arrayValueLabel,$seleccionado){

        foreach($arrayValueLabel as $clave => $valor){
            
            if(in_array($clave,$seleccionado)){
                
                echo "<input type=\"checkbox\" name=\"$nombre\" value=\"$valor\" id=\"$valor\" checked=\"checked\"/>";
                
            }
               
            else{
            
                echo "<input type=\"checkbox\" name=\"$nombre\" value=\"$valor\" id=\"$valor\"/>";
                   
            }

            echo "<label for=\"$clave\">$valor</label><br/>";

        }

    }

    function pintarSelectSimp($nombre,$arrayValueLabel){
        
        echo "<select name=\"$nombre\">";

        foreach($arrayValueLabel as $clave => $valor){ 
               
            echo "<option value=\"$clave\">$valor</option>";
        }
        
        echo "</select>";
    }

    function pintarSelectMult($nombre,$arrayValueLabel,$seleccionado){
        
        echo "<select name=\"$nombre\" multiple=\"multiple\">";

        foreach($arrayValueLabel as $clave => $valor){
            
            if(in_array($clave,$seleccionado)){
                
                echo "<option value=\"$clave\" selected=\"selected\">$valor</option>";
                
            }
               
            else{
            
                echo "<option value=\"$clave\">$valor</option>";
            }            
        }
        
        echo "</select>";
    } 

?>

