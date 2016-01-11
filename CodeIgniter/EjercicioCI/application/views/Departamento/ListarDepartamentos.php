<h1>Lista de Departamentos</h1>

<ul>
<?php foreach($departamentos as $departamento):?>
    
    <li><?=$departamento->nombre?></li>
    
    <?php endforeach;?>


</ul>