<?php
include("conexion.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['tip_doc']) >= 1 && strlen($_POST['num_doc']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1){
        $name = trim($_POST['nombres']);
        $email = trim($_POST['correo']);
        $pass = trim($_POST['contrasena']);
        $tip_doc = trim($_POST['tip_doc']);
        $num_doc = trim($_POST['num_doc']);
        //$consulta = "INSERT INTO `prueba`(`nombre`, `mail`) VALUES ('$name','$email')";
        $consulta = "INSERT INTO `login_prueba2`(`nombre_completo`, `tip_doc`, `num_doc`, `email`, `contrasena`) VALUES ('$name','$tip_doc','$num_doc','$email','$pass')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="cuenta_creada">¡Felicidades, has creado tu cuenta!.</h3>
            <?php
        } else {
            ?>
           <h3 class="cuenta_error">Ocurrió un error durante el registro.</h3>
           <?php
        }

    } else {
        ?>
        <h3 class="cuenta_error">Por favor, completa todos los campos.</h3>
        <?php
    }
}

?>