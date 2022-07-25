<!DOCTYPE html>
<html lang="es">
<style>
@font-face {
    font-family: 'Poppins';
    src: url('fonts/Poppins.otf');
}

img {
    margin: 0 auto;
    width: 50px;
    height: 50px;
}

table th {
    text-align: center;
}

table a {
    color: #90009F;
}
table td a img{
        width: 30px;
        height: 30px;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bienvenido IMPIEMH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<nav class="navbar  text-dark" style="background-color: #956F94; ">
    <div class="container-fluid">
        <a class="navbar h3" href="index.php" style="color: rgb(255, 255, 255);">IMPIEMH</a>
        <a class="nav-link h3" style="color: rgb(255, 255, 255);" href="sesion.php">Usuario</a>
    </div>
</nav>

<body>
    <div>
        <table class="table table-borderless" style="background-color:#FFECF4;">
            <thead>
                <tr>
                    <th scope="col">
                        <img src="img/agenda.png" alt="logo">
                        <br>
                        <a href="agenda.php">Agenda</a>
                    </th>
                    <th scope="col">
                        <img src="img/nuevopaciente.PNG" alt="logo">
                        <br>
                        <a href="pacienteNuevo.php">Nuevo Paciente</a>
                    </th>
                    <th scope="col">
                        <img src="img/llamada.PNG" alt="logo">
                        <br>
                        <a href="llamadaDeRescate.php">Llamada de emergencia</a>
                    </th>
                    <th scope="col">
                        <img src="img/listadopacientes.PNG" alt="logo">
                        <br>
                        <a href="listaDePacientes.php">Listado de pacientes</a>
                    </th>
                    <th scope="col">
                        <img src="img/expedientes.PNG" alt="logo">
                        <br>
                        <a href="expedientes.php">Expedientes</a>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="container m-3">
        <div class="row">
            <div class="col text-center p-5 rounded-pill" style="background-color:#E14B9A;">
                <strong class="h3" style="color:#fff; ">Agenda general</strong>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
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