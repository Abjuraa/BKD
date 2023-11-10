<?php
include("conexion.php");

if (isset($_POST['registro'])) {
    $name = trim($_POST['nombres']);
    $email = trim($_POST['correo']);
    $pass = trim($_POST['contrasena']);
    $tip_doc = trim($_POST['tip_doc']);
    $num_doc = trim($_POST['num_doc']);

    if (empty($name) || empty($email) || empty($pass) || empty($tip_doc) || empty($num_doc)) {
        echo '<h3 class="cuenta_error">Por favor, completa todos los campos.</h3>';
    } else {
        $pass = trim($_POST['contrasena']);
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
        $consulta = "INSERT INTO `login`(`nom`, `email`, `pass`, `id_tip_doc`, `n_doc`) VALUES ('$name','$email','$hashed_pass','$tip_doc','$num_doc')";
        $resultado = mysqli_query($conex, $consulta);
        

        if ($resultado) {
            echo '<h3 class="cuenta_creada">¡Felicidades, has creado tu cuenta!.</h3>';
        } else {
            echo '<h3 class="cuenta_error">Ocurrió un error durante el registro.</h3>';
        }
    }
}

$conex->close();
?>
