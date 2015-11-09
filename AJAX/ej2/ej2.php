<?php

    $ccaaPro=array(
            'Andalucía' =>['Almería','Cádiz','Córdoba','Granada','Huelva','Jaén','Málaga','Sevilla'], 
            'Aragón' => ['Huesca','Teruel','Zaragoza'], 
            'Asturias (Principado de)' => ['Asturias'], 
            'Canarias' => ['Palmas (Las)','Santa Cruz de Tenerife'], 
            'Cantabria' => ['Cantabria'], 
            'Castilla y León' => ['Ávila','Burgos','León','Palencia','Salamanca','Segovia','Soria','Valladolid','Zamora'], 
            'Castilla-La Mancha' => ['Albacete','Ciudad Real','Cuenca','Guadalajara','Toledo'],
            'Cataluña' => ['Barcelona','Gerona','Lérida','Tarragona'], 
            'Ceuta (Ciudad de)' => ['Ceuta'], 
            'Comunidad Valenciana' => ['Alicante','Castellón','Valencia'], 
            'Extremadura' => ['Badajoz','Cáceres'], 
            'Galicia' => ['Coruña (La)','Lugo','Orense','Pontevedra'],
            'Islas Baleares' => ['Islas Baleares'], 
            'Madrid (Comunidad de)' => ['Madrid'], 
            'Melilla (Ciudad de)' => ['Melilla'], 
            'Murcia (Región de)' => ['Murcia'], 
            'Navarra (Comunidad Foral de)' => ['Navarra'], 
            'País Vasco' => ['Álava','Guipúzcoa','Vizcaya'], 
            'Rioja (La)' => ['Rioja (La)']
            );

    $options="";

    foreach($ccaaPro as $k=>$v){
        
        $options.="<option>$k</option>";        
        
    }

    $provincias="";

    foreach($ccaaPro['Andalucía'] as $v){
        
        $provincias.="<option>$v</option>";
        
    }


?>


<html>    
    <head>    
        <script> 
        
            function ajax(){
                
                var xmlhttp=new XMLHttpRequest();
                
                var ccaa=document.getElementById("ccaa").value;
                
                xmlhttp.open("POST","ej2Ajax.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("ccaa="+ccaa);
                xmlhttp.onreadystatechange=function(){
                    
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        
                        document.getElementById("provincia").innerHTML=xmlhttp.responseText;;
                        
                    }                    
                }
            }
            
        </script>   
    </head>    
    <body>

        Comunidad Autónoma <select name="ccaa" id="ccaa"  onchange="ajax()">
            <?=$options?>
        </select>
        </br>
        </br>
        <div id="provincia">Provincias <select><?=$provincias?></select></div>

    </body>
</html>