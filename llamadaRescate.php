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
                <strong class="h3" style="color:#fff; ">Registro para llamada de rescate</strong>
            </div>
            <br>
            <div class="container mt-3">
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="edad" type="text" required class="form-control" placeholder="Edad">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input name="escolaridad" type="text" required class="form-control" placeholder="Escolaridad">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <strong>Datos generales</strong>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Numero de contacto</label>
                            <input name="telefono" type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <strong style="color:#DA92B2;">Datos de llamada</strong>
                    <div class="form-row mt-3">
                        <div class="col-xs-12">
                            <label for="">Fecha</label><br>
                            <?php
                                date_default_timezone_set('America/Mexico_City');
                                echo date('d/m/y');
                            ?><br><br>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Comentarios</label>
                            <input name="comentarios" class="form-control" id="exampleFormControlTextarea1" rows="3" style= "height:120px;">
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
                            class="h3">Guardar</strong></button>
                </form>
            </div>
        </div>
    </div>
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