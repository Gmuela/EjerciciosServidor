<?php

    function generaCadenaAleatoria($longitud = 5) {
        
      $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      $base = strlen($charset); 
      $result = '';
      $now = explode(' ', microtime())[1];
      while ($now >= $base){
        $i = $now % $base;
        $result = $charset[$i] . $result;
        $now /= $base;
      }
        
      return substr($result, -5);
    }


    $bool=isset($_COOKIE["uid"]);
    
    if($bool){
        
        echo "Hola de nuevo. Te recuerdo como ".$_COOKIE["uid"];
    }

    else{
        
        $aleatorio=generaCadenaAleatoria();
        
        setcookie("uid",$aleatorio);
        
        echo "Hola desconocido, a partir de ahora te recordaré";        
    }     
?>