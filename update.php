<?php
//Agregamos el archivo de conexion
include 'connetion.php';

//Obtenemos la matricula que envio el index
$idmatricula = $_GET['matricula'];

$sql = "SELECT * FROM usuario where matricula='" . $idmatricula . "'";
$data = mysqli_query($conection,$sql);
$row = mysqli_fetch_assoc($data);
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
                <h2 class="text-center">MODIFICAR USUARIO</h2>
                <form name="fregistro" id="fregistro" method="POST" action="">
                    <div class="form-group">
                        <label for="email">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre..." name="nombre" value="<?php echo $row['nombre'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Escribe tu apellido..." name="apellido" name="nombre" value="<?php echo $row['apellidos'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Matricula:</label>
                        <input type="text" class="form-control" id="matricula" placeholder="Escribe tu matricula..." name="matricula" name="nombre" value="<?php echo $row['matricula'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="frank@example.com" name="email" name="nombre" value="<?php echo $row['correo'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" placeholder="0123456789 " name="telefono" name="nombre" value="<?php echo $row['telefono'] ?>">
                    </div>
                    <button type="submit" class="btn btn-info btn-block" name="botonEnvia">MODIFICAR</button>

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

        $sql = "UPDATE usuario SET nombre='$nombre',apellidos='$apellido',matricula='$matricula',correo='$email',telefono='$telefono' WHERE matricula='" . $idmatricula . "'";

        $data = mysqli_query($conection, $sql);

        if ($data) {

            header("location:index.php");

        }
    }
}
?>