<html>

<head>

    <script>
        function ajax() {

            var xmlhttp = new XMLHttpRequest();

            var nombre = document.getElementById("nombre").value;

            xmlhttp.open("GET", "ajaxej1.php?nombre=" + nombre, true);
            xmlhttp.send();

            xmlhttp.onreadystatechange = function() {

                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    document.getElementById("saludo").innerHTML = xmlhttp.responseText;

                }
            }
        }

    </script>
</head>

<body>

    <h1>SALUDADOR</h1>

    </br>
    </br>

    Introduce tu nombre
    <input type="text" name="nombre" id="nombre" />
    </br>
    <input type="button" onclick="ajax()" value="Saludar" />

    <div id="saludo"></div>

</body>

</html>
