<?php



?>

<h2>Deportes</h2>

<form action="<?=UriParser::getBaseUri()?>Deporte/listar" method="post">

<label for="idFut">Fútbol</label>
<input type="checkbox" id="idFut" name="deporte[]" value="futbol"/>
    
<label for="idFut">Baloncesto</label>
<input type="checkbox" id="idBal" name="deporte[]" value="baloncesto"/>
    
<label for="idFut">Tenis</label>
<input type="checkbox" id="idTen" name="deporte[]" value="tenis"/>
    
<label for="idFut">Natación</label>
<input type="checkbox" id="idNat" name="deporte[]" value="natacion"/>

<br/>
<br/>
<input type="submit" value="Enviar"/>
</form>