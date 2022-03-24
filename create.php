<!--Agregamos el archivo de conexion-->
<?php
include 'connetion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center">AGREGAR USUARIO</h2>
                <form name="fregistro" id="fregistro" method="POST" action="">
                    <div class="form-group">
                        <label for="email">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre..." name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Escribe tu apellido..." name="apellido">
                    </div>
                    <div class="form-group">
                        <label for="email">Matricula:</label>
                        <input type="text" class="form-control" id="matricula" placeholder="Escribe tu matricula..." name="matricula">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="frank@example.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" placeholder="0123456789 " name="telefono">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="botonEnvia">AGREGAR</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>

<?php

if (isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['matricula']) || isset($_POST['email'])  || isset($_POST['telefono'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if (!isset($nombre) || $nombre == NULL || !isset($apellido) || $apellido == NULL || !isset($matricula) || $matricula == NULL || !isset($email) || $email == NULL || !isset($telefono) || $telefono == NULL) {

        echo "LLENE LOS CAMPOS VACIOS";
    } else {

        $sql = "INSERT INTO usuario(nombre,apellidos,matricula,correo,telefono) VALUES('$nombre','$apellido','$matricula','$email','$telefono')";

        $data = mysqli_query($conection, $sql);

        if ($data) {
            header("location:index.php");
        }
    }
}
?>