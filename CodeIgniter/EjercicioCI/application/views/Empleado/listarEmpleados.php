<h1>Lista de Departamentos</h1>

<ul>
<?php foreach($empleados as $empleado):?>
    
    <li><?=$empleado->nombre?> <?=$empleado->apellidos?> </li>
    
    <?php endforeach;?>


</ul>