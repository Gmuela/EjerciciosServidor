<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        
       <h2><?=$consulta?></h2>
    
        <?php foreach($consulta2 as $saludo): ?>
        <h2><?=$saludo["mensaje"]?></h2>
        <?php endforeach;?>
    
    </body>

    
</html>