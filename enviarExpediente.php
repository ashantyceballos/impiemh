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
                <strong class="h3" style="color:#fff; ">Enviar expediente</strong>
            </div>
            <div class="container mt-3">
                <form action="<?php $_SERVER['PHP_SELF']?>" method= "POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">No. Expediente</label>
                            <input type="text" name="id_paciente" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Destinatario</label>
                            <input type="text" name="destinatario" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Remitente</label>
                            <input type="text" name="remitente" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Fecha</label><br>
                            <input type="date" id="start" name="fecha"
                                value="2022-08-02"
                                min="2022-01-01" max="2022-12-31">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Observación</label>
                            <input name="observacion" class="form-control" id="exampleFormControlTextarea1" rows="3" style= "height:120px;">
                        </div>
                    </div>
                    <input name="ingresar" type="submit" style="background-color: #DA92B2;" class="btn" value="Guardar expediente">
                </form>
                <?php
                    if (isset($_POST['ingresar'])) {
                        $id_paciente = $_POST['id_paciente'];
                        $destinatario = $_POST['destinatario'];
                        $remitente = $_POST['remitente'];
                        $fecha = $_POST['fecha'];
                        $observacion = $_POST['observacion'];
                        $arrayId = array('id_paciente' => $id_paciente, 'destinatario' => $destinatario, 'remitente' => $remitente, 'fecha' => $fecha, 'observacion' => $observacion);
                        
                        $json_data = json_encode($arrayId); // Datos convetidos a JSON
                        $server = "impiemh-apirest.herokuapp.com";
                        $uri = "https://$server/controller/expedientes.php?opcion=insert";
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
                        print_r($data[1]);
                    }
                    if (empty($data)) {
                        echo '<p>No se ha enviado un expediente aún</p>';
                    } else {
                        echo '<div class="alert alert-success">Expediente ingresado</div>';
                    }
                    ?>
            </div>
        </div>
    </div>
    </div>
    <br>
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
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</html>