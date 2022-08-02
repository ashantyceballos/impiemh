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
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="lugarnac" type="text" required class="form-control"
                                        placeholder="Lugar de nacimiento">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Fecha Nacimiento</label><br>
                                                <input type="date" id="start" name="fechanac"
                                                    value="2022-08-02"
                                                    min="1600-01-01" max="2022-12-31">
                                            </div>
                                        </div>
                                    <br>
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
                        <input type="text" class="form-control" name="calle" placeholder="Calle">
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
                        <input type="text" name="colonia" class="form-control" id="inputCity">
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
                            <input class="form-check-input" type="radio" name="servmedico" id="exampleRadios1"
                                value="Si" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servmedico" id="exampleRadios2"
                                value="No">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                        <input name="nomservmed" type="text" required class="form-control" placeholder="Servicio médico">
                    </div>
                </div>
                <strong style="color:#DA92B2;">Contacto de emergencia</strong>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="nombrecontactoem" type="text" required class="form-control" placeholder="Nombre">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="parentesco" type="text" required class="form-control" placeholder="Parentesco">
                                    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input name="telefonopar" type="text" required class="form-control" placeholder="Teléfono">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input name="ingresar" type="submit" style="background-color: #DA92B2;" class="btn" value="Guardar paciente">
            </form>
            <?php
                    if (isset($_POST['ingresar'])) {
                        $noexpediente = $_POST['noexpediente'];
                        $nombre = $_POST['nombre'];
                        $apellidop = $_POST['apellidop'];
                        $apellidom = $_POST['apellidom'];
                        $sexo = $_POST['sexo'];
                        $servicio = $_POST['servicio'];
                        $lugarnac = $_POST['lugarnac'];
                        $fechanac = $_POST['fechanac'];
                        $edad = $_POST['edad'];
                        $calle = $_POST['calle'];
                        $noext = $_POST['noext'];
                        $noint = $_POST['noint'];
                        $cp = $_POST['cp'];
                        $antiguedad = $_POST['antiguedad'];
                        $municipio = $_POST['municipio'];
                        $entidadfed = $_POST['entidadfed'];
                        $colonia = $_POST['colonia'];
                        $seccion = $_POST['seccion'];
                        $ref = $_POST['ref'];
                        $fotocasa = $_POST['fotocasa'];
                        $telefono = $_POST['telefono'];
                        $escolaridad = $_POST['escolaridad'];
                        $estadocivil= $_POST['estadocivil'];
                        $religion = $_POST['religion'];
                        $numhijos = $_POST['numhijos'];
                        $servmedico = $_POST['servmedico'];
                        $nomservmed = $_POST['nomservmed'];
                        $nombrecontactoem = $_POST['nombrecontactoem'];
                        $parentesco = $_POST['parentesco'];
                        $telefonopar = $_POST['telefonopar'];
                        $arrayId = array(
                            'noexpediente' => $noexpediente,
                            'nombre' => $nombre,
                            'apellidop' => $apellidop,
                            'apellidom' => $apellidom,
                            'sexo' => $sexo,
                            'servicio' => $servicio,
                            'lugarnac' => $lugarnac,
                            'fechanac' => $fechanac,
                            'edad' => $edad,
                            'calle' => $calle,
                            'noext' => $noext,
                            'noint' => $noint,
                            'cp' => $cp,
                            'antiguedad' => $antiguedad,
                            'municipio' => $municipio,
                            'entidadfed' => $entidadfed,
                            'colonia' => $colonia,
                            'seccion' => $seccion,
                            'ref' => $ref,
                            'fotocasa' => $fotocasa,
                            'telefono' => $telefono,
                            'escolaridad' => $escolaridad,
                            'estadocivil' => $estadocivil,
                            'religion' => $religion,
                            'numhijos' => $numhijos,
                            'servmedico' => $servmedico,
                            'nomservmed' => $nomservmed,
                            'nombrecontactoem' => $nombrecontactoem,
                            'parentesco' => $parentesco,
                            'telefonopar' => $telefonopar);
                        $json_data = json_encode($arrayId); // Datos convetidos a JSON
                        $server = "impiemh-apirest.herokuapp.com";
                        $uri = "https://$server/controller/pacientes.php?opcion=insert";
                        $curl = curl_init($uri);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        $headers = array(
                            "Content-Type" => "application/json",
                        );
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                        $respuesta = curl_exec($curl);
                        curl_close($curl);
                        // 
                        $data = json_decode($respuesta, true);
                    }
                    if (empty($data)) {
                        echo '<p>No se ha registrado al paciente aún</p>';
                    } else {
                        echo '<div class="alert alert-success">Paciente ingresado</div>';
                    }
                    ?>
        </div>
    </div>
</div>
</div>
<br>
</div>

</body>
<hr>
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