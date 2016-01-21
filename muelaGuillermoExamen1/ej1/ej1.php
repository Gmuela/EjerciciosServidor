<?php

    //substr($verbo,-2,2) devuelve ar/er/ir
    //substr($verbo,0,-2) devuelve jug/com/viv


    function conjugar($verbo){
        
        $terminacion="";
        
        $verboConjugado="<select name=\"conjugacion\">";
        
        $conjugacion=substr($verbo,-2,2);
        
        if($conjugacion=="ar"){
          
            $terminacion=[
                "yo"=>"o",
                "tu"=>"as",
                "el"=>"a",
                "nos"=>"amos",
                "vos"=>"áis",
                "ellos"=>"an"
            ];
            
        }
        
        elseif($conjugacion=="er"){
           
            $terminacion=[
                "yo"=>"o",
                "tu"=>"es",
                "el"=>"e",
                "nos"=>"emos",
                "vos"=>"éis",
                "ellos"=>"en"
            ];
            
        }
        
        elseif($conjugacion=="ir"){
            
            $terminacion=[
                  "yo"=>"o",
                  "tu"=>"es",
                  "el"=>"e",
                  "nos"=>"imos",
                  "vos"=>"ís",
                  "ellos"=>"en"
            ];
            
        }       
        
        $verbo=substr($verbo,0,-2);
        
        foreach($terminacion as $k=>$term){
            
            $verboConjugado.="<option>".$verbo.$term."</option>".PHP_EOL;
            
        }
        
        $verboConjugado.="</select>";
        
        return $verboConjugado;
        
    }

?>