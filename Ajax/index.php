<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function ejecutarAjax() {
                var conexion;

                //COMPATIBILIDAD CON TODOS LOS NAVS
                if (window.XMLHttpRequest) {
                    conexion = new XMLHttpRequest();
                } else {
                    //internet explorer viejo
                    conexion = new ActiveXObject("Microsoft.XMLHTTP");
                }

                conexion.onreadystatechange = function() {

                    if (conexion.readyState == 4 && conexion.status == 200) {
                        //RESPIESTA DEL SERVIDOR
                        document.getElementById("contenido").innerHTML = conexion.responseText;
                    }
                }

                //var n = getValue("#nombre");
//                var e = getValue("#empresa");
//                var t = getValue("#telefono");
//                var c = getValue("#correo");
//                var m = getValue("#mensaje");

                //conexion.open("GET", "ejemplo.html", true);
                conexion.open("POST", "action.php", true);
                conexion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                var vars="nombre=" + getValue("nombre")+"&correo="+getValue("correo")+"&mensaje="+getValue("mensaje");
                ////true es asincrónica para el servidor
                //Post no hay limitaciones de tamaño para enviar archivos
                //Post es mejor para enviar datos sensibles de usuario
                conexion.send(vars);
            }

            function getValue(a) {
                return document.getElementById(a).value;
            }
        </script>
    </head>
    <body>
        
        <div id="contenido">

            <form id="contacto" name="contacto">
                <div class="medidas"><label for="nombre" accesskey="n">Nombre: </label><input name="nombre" type="text" id="nombre" size="60" /></div>
                <div class="medidas"><label for="mail" accesskey="m">E-mail: </label><input name="correo" type="text" id="correo" size="60" /></div>
                <div class="medidas"><label for="asunto" accesskey="a">Asunto: </label><textarea name="mensaje" cols="42" rows="7" id="mensaje"></textarea></div>

                <div id="faltanCampos"></div>

                <button type="button" onclick="ejecutarAjax()">Enviar</button>
            </form>
            <!--            MM_validateForm('nombre', '', 'R', 'telefono', '', 'RisNum', 'correo', '', 'NisEmail');
                                                                                                                            return document.MM_returnValue-->
        </div>


        <script>
            function decirtexto() {
                alert(document.getElementById("prueba").value);
            }
        </script>
        <input type="text" value="Este es mi texto" id="prueba">
        <button type="button" onclick="decirtexto()">texto</button>

    </body>
</html>
