<?php

    $BDempleados=[
        
        ["nombre"=>"Guillermo","apellido"=>"Muela López","telf"=>"910000000"],
        ["nombre"=>"Maria","apellido"=>"Calvo Rodriguez","telf"=>"910000001"],
        ["nombre"=>"Jose Bruno","apellido"=>"Muela Artero","telf"=>"910000002"],
        ["nombre"=>"Maria Jose","apellido"=>"López Tuz","telf"=>"910000003"],
        ["nombre"=>"Rocko","apellido"=>"Muela Alicates","telf"=>"910000004"]  
        
    ];   

    $return="<table><tr><th>Nombre</th><th>Apellido</th><th>Teléfono</th></tr><tr>";

    if(isset($_REQUEST["tipoFiltro"]) && $_REQUEST["filtro"]!=""){  
        
        foreach($BDempleados as $v){
            
            foreach($v as $k=>$v2){
                
                if($k==$_REQUEST["tipoFiltro"]){
                    
                    $encontrado=strpos($v2, $_REQUEST["filtro"]);
                    
                    if($encontrado!==false){
                        
                        foreach($v as $k2=>$v3){
                           
                             $return.="<td>".$v3."</td>";                 
                        } 
                    }
                }              
            }
            
            $return.="</tr>";
            
        }

        $return.="</table>";
        
        echo "$return";
    }
        
       
    else{
        
        foreach($BDempleados as $v){
            
            foreach($v as $k=>$v2){
                     
                $return.="<td>".$v2."</td>";
                    
                              
            }
            
            $return.="</tr>";
            
        }

        $return.="</table>";
        
        echo "$return";
    }
    
?>

