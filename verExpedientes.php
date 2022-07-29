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
                <strong class="h3" style="color:#fff; ">Expedientes</strong>
            </div>
            <br>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No. Oficio</th>
                            <th scope="col">Destinatario</th>
                            <th scope="col">Remitente</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>126</td>
                        <td>Jonathan Josue Chel Madrid</td>
                        <td>Desarrollo Social</td>
                        <td>05/07/2022</td>
                        <td>Archivado</td>
                        <td>
                            <a href="verDato.php">
                                <img src="img/icon-lapiz.PNG" class="img-fluid img-thumbnail">
                            </a>
                            <a href="verDato.php">
                                <img src="img/icon-ojo.PNG" class="img-fluid img-thumbnail">
                            </a>
                            <a href="verDato.php">
                                <img src="img/icon-bote.PNG" class="img-fluid img-thumbnail">
                            </a>
                        </td>

                    </tr>
                    <tr>
                    <td>126</td>
                        <td>Ashanty Lizeth Ceballos Pech</td>
                        <td>Desarrollo Social</td>
                        <td>05/07/2022</td>
                        <td>Archivado</td>
                        <td>
                            <a href="verDato.php">
                                <img src="img/icon-lapiz.PNG" class="img-fluid img-thumbnail">
                            </a>
                            <a href="verDato.php">
                                <img src="img/icon-ojo.PNG" class="img-fluid img-thumbnail">
                            </a>
                            <a href="verDato.php">
                                <img src="img/icon-bote.PNG" class="img-fluid img-thumbnail">
                            </a>
                        </td>

                    </tr>
                    <tr>
                    <td>126</td>
                        <td>Andrea Perez Matínes</td>
                        <td>Secretaría técnica</td>
                        <td>05/07/2022</td>
                        <td>Archivado</td>
                        <td>
                            <a href="verDato.php">
                                <img src="img/icon-lapiz.PNG" class="img-fluid img-thumbnail">
                            </a>
                            <a href="verDato.php">
                                <img src="img/icon-ojo.PNG" class="img-fluid img-thumbnail">
                            </a>
                            <a href="verDato.php">
                                <img src="img/icon-bote.PNG" class="img-fluid img-thumbnail">
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
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