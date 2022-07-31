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
    $server = "impiemh-apirest.herokuapp.com";
    $data = json_decode(file_get_contents("http://".$server."/controller/productos.php?opcion=get"), true);
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
            <form action="<?php $_SERVER['PHP_SELF']?>" method= "POST">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="">Fecha</label><br>
                            <?php
                                date_default_timezone_set('America/Mexico_City');
                                echo date('d/m/y');
                            ?><br><br>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">No. Expediente</label>
                        <input type="text" name="noexpediente" class="form-control" id="inputCity">
                    </div>
                </div>
                <strong>Datos generales</strong>
                <br>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="nombre" type="text" required class="form-control" placeholder="Nombre(s)">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="apellidop" type="text" required class="form-control"
                                        placeholder="Apellido paterno">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="apellidom" type="text" required class="form-control"
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
                            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1"
                                value="Femenino" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Femenino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2"
                                value="Masculino">
                            <label class="form-check-label" for="exampleRadios2">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios3"
                                value="LGBTTTIQ+">
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
                            <input class="form-check-input" type="checkbox" name="servicio" value="Si" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="servicio" value="No" id="defaultCheck2">
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
                                    <input name="lugarnac" type="text" required class="form-control"
                                        placeholder="Lugar de nacimiento">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="fechanac" type="text" required class="form-control"
                                        placeholder="Fecha de nacimiento">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="edad" type="text" required class="form-control" placeholder="Edad">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <strong style="color:#DA92B2;">Información del domicilio</strong>
                <br>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="calle" placeholder="Calle">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="noext" type="text" required class="form-control" placeholder="No. Exterior">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="noint" type="text" required class="form-control" placeholder="No. Interior">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="cp" type="text" required class="form-control" placeholder="CP">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="antiguedad" type="text" required class="form-control" placeholder="Antiguedad">
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
                                    <input name="municipio" type="text" required class="form-control" placeholder="Municipio">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="entidadfed" type="text" required class="form-control" placeholder="Entidad Federativa">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="seccion" type="text" required class="form-control" placeholder="Sección">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Colonia</label>
                        <input type="text" name="seccion" class="form-control" id="inputCity">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Referencias</label>
                        <input name="ref" class="form-control" id="exampleFormControlTextarea1" rows="3" style= "height:120px;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div id="map" name="map"></div>
                    </div>
                </div>
                <script>
                var ubicacion = L.map('map').
                setView([18.50361, -88.30528],
                    14);

                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                    maxZoom: 18
                }).addTo(ubicacion);

                L.control.scale().addTo(ubicacion);
                L.marker([18.50361, -88.30528], {
                    draggable: true
                }).addTo(ubicacion);
                </script>
                <strong style="color:#DA92B2;">Añadir foto del domicilio</strong>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <input name="fotocasa" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <strong style="color:#DA92B2;">Información adicional</strong>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="telefono" type="text" required class="form-control" placeholder="Telefono">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="escolaridad" type="text" required class="form-control" placeholder="Escolaridad">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="estadocivil" type="text" required class="form-control" placeholder="Estado civil">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="religion" type="text" required class="form-control" placeholder="Religión">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="numhijos" type="text" required class="form-control" placeholder="Numero de hijos">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <strong style="color:#000;">Servicio médico</strong>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="exampleRadios1"
                                value="Si" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="exampleRadios2"
                                value="No">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <strong style="color:#DA92B2;">Contacto de emergencia</strong>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="nombre" type="text" required class="form-control" placeholder="Nombre">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="parentesco" type="text" required class="form-control" placeholder="Parentesco">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="telefonopar" type="text" required class="form-control" placeholder="Teléfono">
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