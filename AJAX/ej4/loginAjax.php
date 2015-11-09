<?php

    $palabrasLogin=["es"=>["Usuario","Contraseña","Entrar"],"en"=>["User","Password","Login"]];

    $return="";

    if(isset($_REQUEST["lang"])){  

            for($i=0;$i<3;$i++){

               $return.="{$palabrasLogin[$_REQUEST["lang"]][$i]}&"; 

            }

            echo "$return";
        }

        else{

            echo "CACA DE VACA";
        }


?>