<h2>Crear Departamentos</h2>

<form action="<?=UriParser::getBaseUri()?>Departamento/crear" method="post">

    Número de departamentos a crear <input type="text" name="numCols"/>
    <br/>
    Departamentos <input type="text" name="nuevosDeparts"/>
<br/>
<br/>
<input type="submit" value="Enviar"/>
</form>