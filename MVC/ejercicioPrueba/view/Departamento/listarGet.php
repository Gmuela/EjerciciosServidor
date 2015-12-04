<h2>Departamentos</h2>

<form action="<?=UriParser::getBaseUri()?>Departamento/listar" method="post">

    <?php foreach($d["mainView"]["departamentos"] as $departamento):?>
    
        <label for="id<?= $departamento?>"><?= $departamento?></label>
<input type="checkbox" id="id<?= $departamento?>" name="departamentos[]" value="<?= $departamento?>"/>  

    <?php endforeach;?>
<br/>
<br/>
<input type="submit" value="Enviar"/>
</form>