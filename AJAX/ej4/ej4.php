<html>
    <meta charset="utf-8">
    <script> 
        
        var rand="";
        var userNumber="";
        var idioma='es';
        var resultIgual="¡Enhorabuena!";
        var resultMayor="Lo siento, tu número es mayor";
        var resultMenor="Lo siento, tu número es menor";
    
        function ajax(){
                
            var idioma=document.querySelector('input[name="lang"]:checked').value;

            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("POST","ej4Ajax.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

            if(rand=="" || userNumber==""){

                xmlhttp.send("lang="+idioma);                    
            }

            else{

              xmlhttp.send("lang="+idioma+"&userNumber="+userNumber+"&rand="+rand);  
            }

            xmlhttp.onreadystatechange=function(){

                if(xmlhttp.readyState==4 && xmlhttp.status==200){

                    var respuesta=xmlhttp.responseText.split("&")

                    document.getElementById("texto1").innerHTML=respuesta[0];
                    document.getElementById("texto2").value=respuesta[1];
                    document.getElementById("texto3").value=respuesta[2];                  
                    document.getElementById("texto4").innerHTML=respuesta[3];                
                    document.getElementById("texto5").innerHTML=respuesta[4];                   
                    resultIgual=respuesta[5];                
                    resultMayor=respuesta[6];                 
                    resultMenor=respuesta[7];
                    if(userNumber==rand){
              
                        document.getElementById("texto6").innerHTML=resultIgual;
                    }

                    if(userNumber>rand){

                        document.getElementById("texto6").innerHTML=resultMayor;
                    }

                    if(userNumber<rand){

                        document.getElementById("texto6").innerHTML=resultMenor;
                    }
                }                    
            }
        }

        function jugar(){

            userNumber=document.getElementById("userNumber").value;
            rand = (Math.round(Math.random()*9)+1);            

            document.getElementById("resp1").innerHTML=rand;
            document.getElementById("resp2").innerHTML=userNumber;            
            
            if(userNumber==rand){
              
                document.getElementById("texto6").innerHTML=resultIgual;               
            }
            
            if(userNumber>rand){
              
                document.getElementById("texto6").innerHTML=resultMayor;
                
            }
            
            if(userNumber<rand){
              
                document.getElementById("texto6").innerHTML=resultMenor;
                
            }     
        }
    
    </script>
    
    <style>
        img{            
            width=10%;
            height: 10%;            
        }
        
        *{
            
            margin: 2px;
        }
    
    </style>
<body>
    
    <img src="img/es.png"><input type="radio" name="lang" value="es" checked="checked" onchange="ajax()"/>
    <img src="img/en.png"><input type="radio" name="lang" value="en" onchange="ajax()"/>    
    </br>
    </br>
    <div id="result">
        <label id="texto1">Introduce un número (1-10)</label>
        <input type="text" id="userNumber"/></br>
        <input id="texto2" type="button" value="Jugar" onclick="jugar()">        
        <div id="resp">
            <label id="texto4">Mi número:</label><label id="resp1"></label>
            </br>
            <label id="texto5">Tu número:</label><label id="resp2"></label>
            </br>
            <label id="texto6"></label>
        </div>
        <input id="texto3" type="button" value="Volver">
    </div>
</body>
</html>