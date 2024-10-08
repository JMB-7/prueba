<?php
include ('db.php'); //Llamando al archivo de conexión

$con = db();//Variable para la función conexión.

$nombre = $_POST['nombre'];//Ese "NOMBRE" es el que está en el input type del index
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nombre, apellido, username, password, email) VALUES ('$nombre', '$apellido', '$username', '$password', '$email')";

$query = mysqli_query($con, $sql); //Para ejecutar la consulta

if($query){
    header(header: "Location: index.php");//Encabezado para que cuando el usuario le de al submit, lo redireccione al index.php
    exit;
};
?>