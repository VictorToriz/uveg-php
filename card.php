<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <!--SCRIPTS CSS BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="./icon_a16c7dd575b0634749d3f60bcdf78a68.ico" />
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4"><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Registro exitoso!</span><br></h2>
                            <div class="contenido">
                                <div class="col1">
                                    <br>
                                    Nombre: <?php echo $_POST["nombre"] ?>
                                    <br>
                                    <br>Apellidos: <?php echo $_POST["apellidos"] ?>
                                    <br>
                                    <br>Edad: <?php echo $_POST["edad"] ?>
                                    <br>
                                    <br>Correo: <?php echo $_POST["email"] ?>
                                    <br>
                                    <br>Contraseña: <?php echo $_POST["password"] ?>
                                    <br>
                                </div>
                            </div>
                            <div>
                                <br><input class="btn btn-secondary" onclick="history.back()" name="volver atrás" value="volver atrás">
                            </div>

                        </div>
    </section>
</body>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>