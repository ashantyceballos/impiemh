<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bienvenido IMPIEMH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
</head>
<?php
include './navegador/nav.php';
?>
<div class="container">
    <div class="row">
        <div class="col text-center p-3 rounded-pill" style="background-color:#E14B9A;" id="agenda">
            <strong class="h3" style="color:#fff; ">Ficha de primera atencion para mujeres y hombres</strong>
        </div>
        <br>
        <div class="container mt-3 mb-3">
            <strong style="color:#DA92B2;">Información personal</strong>
            <br>
        </div>
        <div class="container mt-3">
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control" placeholder="Día">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="Mes">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">No. Expediente</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                </div>
                <strong>Datos generales</strong>
                <br>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="name" type="text" required class="form-control" placeholder="Nombre">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="apellidoP" type="text" required class="form-control"
                                        placeholder="Apellido paterno">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="apellidoM" type="text" required class="form-control"
                                        placeholder="Apellido materno">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <strong>Sexo</strong>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Femenino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                LGBTTTIQ+
                            </label>
                        </div>
                    </div>
                </div>
                <strong>Ha acudido a nuestro servicio anteriormente</strong>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control"
                                        placeholder="Lugar de nacimiento">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Fecha de nacimiento">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="Edad">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <strong style="color:#DA92B2;">Información del domicilio</strong>
                <br>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputCity" placeholder="Calle">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control"
                                        placeholder="No. Exterior">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="No. Interior">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="CP">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="Tiempo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control" placeholder="Municipio">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Entidad Federativa">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Colonia</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Referencias</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div id="map" ></div>
                    </div>
                </div>
                <script>
                var map = L.map('map').
                setView([41.66, -4.72],
                    14);

                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                    maxZoom: 18
                }).addTo(map);

                L.control.scale().addTo(map);
                L.marker([41.66, -4.71], {
                    draggable: true
                }).addTo(map);
                </script>
                <strong style="color:#DA92B2;">Añadir foto del domicilio</strong>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <strong style="color:#DA92B2;">Información adicional</strong>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control" placeholder="Telefono">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Escolaridad">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Estado civil">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="Religión">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <strong style="color:#000;">Servicio médico</strong>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                No
                            </label>
                        </div>
                        <input name="mes" type="text" required class="form-control"
                            placeholder="¿Cuál es el servicio médico?">
                    </div>
                </div>
                <strong style="color:#DA92B2;">Contacto de emergencia</strong>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control" placeholder="Nombre">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Parentesco">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="Teléfono">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Numero de hijos">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <strong style="color:#DA92B2;">Hijo #1</strong>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dia" type="text" required class="form-control" placeholder="Nombre">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control" placeholder="Edad">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="mes" type="text" required class="form-control"
                                        placeholder="Escolaridad">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="get" action="guardar.php">
                <button style="background-color: #DA92B2;" type="submit" class="btn btn-primary btn-block"><strong
                        class="h3">Guardar paciente</strong></button>
            </form>
        </div>
    </div>
</div>
</div>

</body>
<div class="footer mt-2 text-center">
    Copyright &copy; 2022 &mdash; IMPIEMH
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="js/my-login.js"></script>

</html>