<?php

function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "bkd";
    $con = mysqli_connect($server,$user,$pass) or die ("Error al conectar con la base de datos". mysqli_error());
    mysqli_select_db($db,$con);

    return $con;

}
?>