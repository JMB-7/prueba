<?php //SEGUNDO
include ('db.php'); //Llamando al archivo

$con = db();//Variable para la función conexión.

$sql = "SELECT * FROM usuarios"; //Que traiga toda la información que haya.
$query = mysqli_query($con, $sql); //Para ejecutar la consulta
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    
    <title>Usuarios</title>
</head>
<body><!--Esto es para agregar los nuevos usuarios-->
    <div class="users-form"><!--NUEVO-->
       <form action="insertar.php" method="post"><!--nuevo-->
        <h1>REGISTRAR UN NUEVO USUARIO</h1>
            <input type="text" name="nombre" placeholder="Nombre completo">
            <input type="text" name="apellido" placeholder="Apellido completo">
            <input type="text" name="username" placeholder="Nombre de usuario">
            <input type="text" name="password" placeholder="Contraseña">
            <input type="text" name="email" placeholder="Correo">
           

            <input type="submit" value="Registrar uno nuevo">
       </form> 
    </div>

<div class="users-table"><!--NUEVO-->
    <h2>Usuarios registrados</h2>
    <table>
        <thead><!--Cabecera para la tabla-->  
            <tr>
                <th>Número de identidad</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th></th> <!--PARA los botones-->
                <th></th>
            </tr>
        </thead>

        <tbody><!--Cuerpo para la información de los usuarios.-->
        <?php while($row = mysqli_fetch_array($query)): #por cada uno de los usuarios que encuentre, la va a imprimir
        ?>

        <tr>
                <th><?= $row['id']?></th> <!--MOSTRAR CADA COLUMNA DEL USUARIO-->
                <th><?= $row['nombre']?></th>
                <th><?= $row['apellido']?></th>
                <th><?= $row['username']?></th>
                <th><?= $row['password']?></th>
                <th><?= $row['email']?></th>

                <th><a href="update.php?id=<?= $row['id']?>"class="users-table--edit">EDITAR</a></th> <!--PARA EL BTN EDITAR-->
                <th><a href="delete_user.php?id=<?= $row['id']?>"class="users-table--delete">ELIMINAR</a></th><!--se le pasa el id, para acceder únicamente a ese usuario-->
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>

</body>
</html>