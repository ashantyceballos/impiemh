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
                <strong class="h3" style="color:#fff; ">Julio - 05/07/2022</strong>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form">
                    <input class="form-control" type="search" placeholder="Buscar">
                    <br>
                    <form method="get" action="guardar.php">
                        <button style="background-color: #DA92B2; width: 300px; margin: 0 auto;" type="submit" class="btn btn-primary btn-block"><strong
                                class="h3">Buscar</strong></button>
                    </form>
                </form>
            </div>
        </div>
    </div>
    <br>
    <h3><strong>Listado de pacientes</strong></h3>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Paciente</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Psicologo</th>
                            <th scope="col">No. Expediente</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Jonathan Josue Chel Madrid</td>
                        <td>24/07/2022</td>
                        <td>9:00am</td>
                        <td>Andrea Peréz Martínez</td>
                        <td>MOPB-IMPIEMH-171-2022</td>
                        <td>Masculino</td>
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
                        <td>Ashanty Lizeth Ceballos Pech</td>
                        <td>24/07/2022</td>
                        <td>9:00am</td>
                        <td>Andrea Peréz Martínez</td>
                        <td>MOPB-IMPIEMH-171-2022</td>
                        <td>Femenino</td>
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
                        <td>Brayan Ulises Luna Castro</td>
                        <td>24/07/2022</td>
                        <td>9:00am</td>
                        <td>Andrea Peréz Martínez</td>
                        <td>MOPB-IMPIEMH-171-2022</td>
                        <td>Masculino</td>
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