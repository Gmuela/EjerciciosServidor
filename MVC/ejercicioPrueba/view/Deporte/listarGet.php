<?php



?>

<h2>Deportes</h2>

<form action="<?=UriParser::getBaseUri()?>Deporte/listar" method="post">

<?php foreach($d["mainView"]["deportes"] as $deporte):?>
    
<label for="idFut"><?= $deporte?></label>
<input type="checkbox" id="<?= $deporte?>" name="deporte[]" value="<?= $deporte?>"/>    

<?php endforeach;?>
<br/>
<br/>
<input type="submit" value="Enviar"/>
</form>