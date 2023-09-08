<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../css/cuenta.css">
</head>
<body>
    <form method="post">
        <section class="form-register">
            <h4>Formulario Registro</h4>
            <input class="controls" type="text" name="nombres" placeholder="Ingrese su nombre" >
            <input class="controls" type="text" name="apellidos" placeholder="Ingrese su apellido" >
            <input class="controls" type="email" name="correo" placeholder="Ingresa su correo electrònico" >
            <input class="controls" type="password" name="contrasena" placeholder="Ingrese su contraseña">
            <p>Estoy de acuerdo con los <a href="#">Terminos y Condiciones</a></p>
            <input class="botons" type="submit" value="Registrar" name="registro">
            <p><a href="sesion.html">¿Ya tienes una cuenta?</a></p>
        </section>
    </form>
     <?php
    //include("../php/registro.php");
    ?>
</body>
</html>