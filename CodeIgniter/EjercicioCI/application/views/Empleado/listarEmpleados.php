<h1>Lista de Empleados</h1>

<form action="listarEmpleados" method="get">
Departamento <select onchange="submit()" name="departamento">

    <option value="0">Todos</option>

    <?php foreach($departamentos as $departamento):?>

    <option value="<?=$departamento->iddep?>"><?=$departamento->nombre?></option>

    <?php endforeach;?>

</select>
</form>

<br/>
<br/>

<table border="1">
    
    <tr><th>Nombre</th><th>Apellidos</th><th>Departamento</th></tr>

    <?php foreach($empleados as $empleado):?>
    
    <tr><td><?=$empleado->nombre?></td><td><?=$empleado->apellidos?></td><td><?=$empleado->depnombre?></td></tr>
    
    <?php endforeach;?>
</table>

