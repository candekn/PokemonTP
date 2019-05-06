<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ingreso - Wikeevee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <script src="js/jquery_3.2.1_jquery.js"></script>

</head>
<body>
<?php require_once("recursos/encabezado.php");?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">¡Bienvenido!</h5>
                    <form class="form-signin" method="post" action="procesarlogin.php">
                        <div class="form-label-group">
                            <input type="email" name="email" id="inputEmail" class="form-control"
                                   placeholder="Ejemplo@email.xyz" required autofocus>
                            <label for="inputEmail" class="labels">Ingrese su email</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="pass" id="inputPassword" class="form-control"
                                   placeholder="Contraseña" required>
                            <label for="inputPassword" class="labels">Ingrese su contraseña</label>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-block submit"
                                type="submit">Ingresar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once("recursos/footer.php") ?>
</body>

</html>
