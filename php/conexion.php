<?php
$conex = mysqli_connect("localhost","root","","bkd");

//if ($conex) {
    // echo "todo bien";
    if ($conex->connect_error) {
        die("Conexión fallida: " . $conex->connect_error);
}
?>