
<html>
    <body>
        
        <b>Listado de Cookies por nivel</b></br>
    
    Nivel 0 --> <a href="mostrarCookie0.php">Listado de cookies</a></br>
    Nivel 0 --> Nivel 1 --> <a href="nivel1/mostrarCookie1.php">Listado de cookies</a></br>
    Nivel 0 --> Nivel 1 --> Nivel 2 --> <a href="nivel1/nivel2/mostrarCookie2.php">Listado de cookies</a></br>

</br>
</br>

    <form action="crearCookie.php" method="get">
        
        Nombre <input type="text" name="nombre"/> Contenido <input type="text" name="contenido"></textarea> 
        
        
                
        Nivel <select name="nivel">

                
    
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
        
            </select>
    
            </br>
            
            <input type="submit" value="Crea Cookie"/>
        
        </form>  
    </body>
</html>