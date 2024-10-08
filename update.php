<?php
include ('db.php'); //Llamando al archivo

$con = db();//Variable para la función conexión.

$id=$_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";//Para que nos traiga el usuario que estamos intentado editar
$query = mysqli_query($con, $sql); //Para ejecutar la consulta
$row=mysqli_fetch_array($query);//Es la del ciclo WHILE, para obtener la información de ese usuario en específico
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>EDITAR</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_users.php" method="post">
            <h1>EDITAR USUARIOS</h1>
            <input type="hidden" name="id" value="<?= $row['id']?>"><!--QUE EL VALOR SEA EL MISMO QUE EN LA BD-->
            <input type="text" name="nombre" placeholder="Nombre completo"  value="<?= $row['nombre']?>">
            <input type="text" name="apellido" placeholder="Apellido completo"  value="<?= $row['apellido']?>">
            <input type="text" name="username" placeholder="Nombre de usuario"  value="<?= $row['username']?>">
            <input type="text" name="password" placeholder="Contraseña"  value="<?= $row['password']?>">
            <input type="text" name="email" placeholder="Correo"  value="<?= $row['email']?>">

            <input type="submit" value="ACTUALIZAR">
        </form>
    </div>
</body>
</html>