<!--Agregamos el archivo de conecion-->
<?php include 'connetion.php'; ?>

<?php
//creamos una consulta para leer los datos de la tabla
$sql = "select * from usuario";
$result = mysqli_query($conection, $sql);
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
        <h2>CRUD PHP-MYSQL</h2>

        <div class="row">
            <div class="col-sm-4 offset-8">
                <a href="create.php" class="btn btn-success">crear usuario</a>
            </div>
        </div>

        <br>

        <table class="table table-condensed">
            <thead>
                <tr class="success">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Matricula</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellidos']; ?></td>
                        <td><?php echo $row['matricula']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td>
                            <a href="update.php?matricula=<?php echo $row['matricula']; ?>" class="btn btn-info btn-sm"> EDITAR</a>  <!--Enviamos la matricula a update-->
                            <a href="delete.php?matricula=<?php echo $row['matricula']; ?>" class="btn btn-danger btn-sm"> ELIMINAR</a>  <!--Enviamos la matricula a delete-->
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>