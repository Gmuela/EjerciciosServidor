<html>
<head>
    <meta charset="utf-8"/>
    
    <script>
    
        function conjugar(){
            
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("POST","ej3Ajax.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            
            var verbo=document.getElementById("verbo").value;

            xmlhttp.send("verbo="+verbo+"&metodo=1");

            xmlhttp.onreadystatechange=function(){

                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    
                    var respuesta=xmlhttp.responseText;
                    
                    document.getElementById("respuesta").innerHTML=respuesta;
                }                    
            }
        }
        
        function conjugacion(){
            
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("POST","ej3Ajax.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            
            var verbo=document.getElementById("verbo").value;

            xmlhttp.send("verbo="+verbo+"&metodo=2");

            xmlhttp.onreadystatechange=function(){

                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    
                    var respuesta=xmlhttp.responseText;
                    
                    document.getElementById("respuesta").innerHTML=respuesta;
                }                    
            }
        }
    
    </script>
    
    <style>
    
        
        
    </style>
    
</head>
<body>
    
    <h2>Introduce un verbo</h2>
    <br/>  
    <input type="text" name="verbo" id="verbo"/>
    <br/>
    <input type="button" onclick="conjugacion()" value="Conjugacion"/>  
    <input type="button" onclick="conjugar()" value="Conjugar"/>
    
    <div id="respuesta"></div>
    ...y observa el resultado
</body>
</html>
