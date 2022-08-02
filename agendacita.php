<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bienvenido IMPIEMH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/styles.css">
</head>
<?php
include './navegador/nav.php';
?>
    <div class="container">
        <div class="row">
            <div class="col text-center p-3 rounded-pill" style="background-color:#E14B9A;" id="agenda">
                <strong class="h3" style="color:#fff; ">Agendar cita</strong>
            </div>
            <div class="container mt-3">
            <form action="<?php $_SERVER['PHP_SELF']?>" method= "POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="inputCity">Día de la cita</label><br>
                            <input type="date" id="start" name="dia"
                            value="2022-08-02"
                            min="1600-01-01" max="2022-12-31">
                        </div>
                    </div>
                    <p>
                        Horario:
                        <select name="hora">
                        <option>10:00am</option>
                        <option>11:00am</option>
                        <option>12:00pm</option>
                        <option>1:00pm</option>
                        <option>2:00pm</option>
                        <option>3:00pm</option>
                        <option>4:00pm</option>
                        </select>
                    </p>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="Cita" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Cita
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="exampleRadios2"
                                    value="Evento">
                                <label class="form-check-label" for="exampleRadios2">
                                    Evento
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Psicóloga</label>
                            <input name="psicologa" type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Nombre del paciente</label>
                            <input name="nombrep" type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">No. Expediente</label>
                            <input name="id_paciente" type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Comentarios</label>
                            <input name="tema" type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <input name="ingresar" type="submit" style="background-color: #DA92B2;" class="btn" value="Guardar cita">
                </form>
                <?php
                    if (isset($_POST['ingresar'])) {
                        $dia = $_POST['dia'];
                        $hora = $_POST['hora'];
                        $tipo = $_POST['tipo'];
                        $psicologa = $_POST['psicologa'];
                        $nombrep = $_POST['nombrep'];
                        $id_paciente = $_POST['id_paciente'];
                        $tema = $_POST['tema'];
                        $arrayId = array('dia' => $dia, 
                                        'hora' => $hora, 
                                        'tipo' => $tipo, 
                                        'psicologa' => $psicologa, 
                                        'nombrep' => $nombrep,
                                        'id_paciente' => $id_paciente, 
                                        'tema' => $tema);
                        
                        $json_data = json_encode($arrayId); // Datos convetidos a JSON
                        $server = "impiemh-apirest.herokuapp.com";
                        $uri = "https://$server/controller/citas.php?opcion=insert";
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
                        echo '<p>No se ha enviado los datos de la cita aún</p>';
                    } else {
                        echo '<div class="alert alert-success">Cita agendada</div>';
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