<?php
include("conexion.php");

if (isset($_POST['inicio_sesion'])) {
    if (strlen($_POST['nom']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $usuario = trim($_POST['nom']);
        $contrasena = trim($_POST['contrasena']);

        $stmt = $conex->prepare("SELECT id_login, nom, pass FROM login WHERE nom = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($id, $nombre, $hash_contrasena);

        if ($stmt->fetch()) {
            // Verificar la contraseña
            if (password_verify($contrasena, $hash_contrasena)) {
                $_SESSION['id'] = $id;
                $_SESSION['nom'] = $nombre;
                header("location: ../index.php");
                exit(); // Asegura que no se ejecute más código después de la redirección
            } else {
                echo '<h3 class="cuenta_error">Contraseña incorrecta</h3>';
            }
        } else {
            echo '<h3 class="cuenta_error">Usuario no encontrado</h3>';
        }

        $stmt->close();
    } else {
        echo '<h3 class="cuenta_error">Por favor, completa todos los campos.</h3>';
    }
}
$conex->close();
?>
