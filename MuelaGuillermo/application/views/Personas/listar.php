<h3>Listado de empleados</h3>
<table id="listado">

    <tr>
        <th>Nombre</th>
        <th>Nº Aficiones</th>
    </tr>

    <?php foreach($personas as $persona):?>

        <?php if($persona[0]->idAfic>0):?>

            <tr>
                <td>
                    <?=$persona[0]->nombre?>
                </td>
                <td>
                    <?=$persona[0]->idAfic?>
                </td>

            </tr>


        <?php endif;?>
    <?php endforeach;?>
</table>
