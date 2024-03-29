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
    color:#90009F;
}

table a {
    color: #90009F;
}

table td a img {
    width: 30px;
    height: 30px;
}

#menu2 {
    margin-left: 250px;
}

#agenda {
    width: 350px;
    margin-left: 25px;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bienvenido IMPIEMH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
include './navegador/nav.php';
$server = "impiemh-apirest.herokuapp.com";
$data = json_decode(file_get_contents("https://".$server."/controller/citas.php?opcion=getCitas"),true);
?>
    <div class="col text-center p-3 rounded-pill" style="background-color:#E14B9A;" id="agenda">
        <strong class="h3" style="color:#fff; ">Agenda general</strong>
    </div>
    <br>
    <div class="container " id="menu2">
        <div class="row">
            <div class="col">
                <form method="get" action="verCitas.php">
                    <button style="background-color: #FEF6FF;" type="submit" class="btn btn-primary btn-block">
                        <strong class="h3" style="color:#90009F;">
                            <img src="img/ojomorado.PNG" alt="logo" style="height:35px;">
                            Ver citas
                        </strong>
                    </button>
                </form>
            </div>
            <div class="col">
                <form method="get" action="agendacita.php">
                    <button style="background-color: #FEF6FF;" type="submit" class="btn btn-primary btn-block">
                        <strong class="h3" style="color:#90009F;">
                            <img src="img/cuadradosmorados.PNG" alt="logo" style="height:35px;">
                            Agendar citas
                        </strong>
                    </button>
                </form>
            </div>
            <div class="col">
                <form method="get" action="agendarEvento.php">
                    <button style="background-color: #FEF6FF;" type="submit" class="btn btn-primary btn-block">
                        <strong class="h3" style="color:#90009F;">
                            <img src="img/listamorado.PNG" alt="logo" style="height:35px;">
                            Agendar evento
                        </strong>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <br>
    <div class="container m-3">
        <div class="row">
            <div class="col text-center p-3" style="background-color:#FFECF4;">
                <strong class="h3" style="color:#E14B9A; ">Agosto 02</strong>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php 
                              if (empty($data)) {
                                    echo ('<p class="font_alt">No hay citas registradas</p>');
                                }else{                                   
                            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hora</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Psicologa</th>
                            <th scope="col">Nombre paciente</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tr>
                    <tbody>
                    <?php
                        for ($i=0; $i < count($data); $i++) { 
                            echo "
                            <tr>
                                <th scope='row'>".$data[$i]["hora"]."</th>
                                <td>".$data[$i]["tipo"]."</td>
                                <td>".$data[$i]["psicologa"]."</td>
                                <td>".$data[$i]["nombrep"]."</td>
                                <td>
                                    <a href='editarExpediente.php'>
                                        <img src='img/icon-lapiz.PNG' class='img-fluid img-thumbnail'>
                                    </a>
                                    <a href='verDato.php'>
                                        <img src='img/icon-ojo.PNG' class='img-fluid img-thumbnail'>
                                    </a>
                                    <a href='verDato.php'>
                                        <img src='img/icon-bote.PNG' class='img-fluid img-thumbnail'>
                                    </a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                    </tbody>
                </table>
                <?php
                                }
                                ?>
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