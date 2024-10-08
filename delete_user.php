<?php
include ('db.php'); //Llamando al archivo

$con = db();//Variable para la función conexión.

$id=$_GET['id'];
$sql = "DELETE FROM usuarios WHERE id='$id'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>