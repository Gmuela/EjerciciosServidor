<script type="text/javascript" src="<?= base_url()?>assets/js/serialize.js"></script>

<script>
    var conexion;

    function crearAficion() {

        var datosSerializados = serialize(formulario);

        conexion = new XMLHttpRequest();

        conexion.open('POST', '<?= base_url() ?>Aficiones/crearPost', true);
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

<h1>Crear Afición</h1>

<form id="formulario">

    <label for="idAficion">Afición</label>
    <input type="text" name="nombreAficion" id="idAficion">

    <input type="button" value="Enviar" class="button" onclick="crearAficion()">
</form>
