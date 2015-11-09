<!doctype html>
<html>
<head>
    
    <?php

        function caracter($codA){

            return chr($codA);

        } 
    
        function codigoUrl($palabra){
            
            return urlencode($palabra);
            
        }
    ?>
    
</head>
<body>
    
    <table border="1">
        <tr><th>#</th><th>Caracter</th><th>Cod.URL</th></tr>
        <?php
          for($i=0;$i<256;$i++){
              
              $car=caracter($i);
              
              $url=codigoUrl($car);
              
              echo "<tr><td>$i</td><td>$car</td><td>$url</td></tr>";              
          }   
        ?>        
    </table>
    
    
    
</body>
</html>