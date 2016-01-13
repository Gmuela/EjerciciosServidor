<script type="text/javascript">
    var conexion;

    function filtrarDep() {
        var iddep = document.getElementById('iddep').value;
        conexion = new XMLHttpRequest();
        conexion.open('POST', '<?= base_url() ?>empleado/listarPost', true);
        conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        conexion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        conexion.send('iddep='+iddep);
        conexion.onreadystatechange = function() {
            if (conexion.readyState == 4 && conexion.status == 200) {
                accionAJAX();
            }
        }
    }
    
    function accionAJAX() {
        textoRecibido = conexion.responseText;
        document.getElementById("listado").innerHTML = textoRecibido;
    }

</script>

<h3>Listado de empleados</h3> Departamento
<select id="iddep" onchange="filtrarDep()" name="iddep">

    <option value="0">Todos</option>

    <?php foreach($departamentos as $departamento):?>

        <option value="<?=$departamento->iddep?>">
            <?=$departamento->nombre?>
        </option>

        <?php endforeach;?>

</select>

<table id="listado">

    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Departamento</th>
    </tr>

    <?php foreach($empleados as $empleado):?>

        <tr>
            <td>
                <?=$empleado->nombre?>
            </td>
            <td>
                <?=$empleado->apellido?>
            </td>
            <td>
                <?=$empleado->depnombre?>
            </td>
        </tr>

        <?php endforeach;?>
</table>
