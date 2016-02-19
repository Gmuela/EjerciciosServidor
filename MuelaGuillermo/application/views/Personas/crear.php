<script type="text/javascript" src="<?= base_url()?>assets/js/serialize.js"></script>

<script>
    var conexion;

    function crearPersona() {

        var datosSerializados = serialize(formulario);

        conexion = new XMLHttpRequest();

        conexion.open('POST', '<?= base_url() ?>Personas/crearPost', true);
        conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        conexion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        conexion.send(datosSerializados);

        conexion.onreadystatechange = function() {

            if (conexion.readyState == 4 && conexion.status == 200) {

                accionAJAX();
            }
        }
    }


    function accionAJAX() {

        textoRecibido = conexion.responseText;

        document.getElementById("idFooter").innerHTML = textoRecibido;
    }

</script>

<!--------------------------------------------->

<h1>Crear Persona</h1>

<form id="formulario">

    <label for="idNombre">Nombre</label>
    <input type="text" name="nombrePersona" id="idNombre">

    <br>

    <fieldset>

        <legend>Aficiones</legend>

        <?php foreach($aficiones as $aficion):?>

            <input type="checkbox" name="aficion[]" value="<?=$aficion->idAfic?>"> <?=$aficion->nombre?>

        <?php endforeach;?>

    </fieldset>

    <br>

    <input type="button" value="Enviar" class="button" onclick="crearPersona()">
</form>
