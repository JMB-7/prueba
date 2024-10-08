<?php

include("db.php");
$con = db();

$id = $_POST['id'];//Se pone porque queremos obtener el id en específico
$nombre = $_POST['nombre'];//Ese "NAME" es el que está en en el input type del index
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', username='$username', password='$password', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>