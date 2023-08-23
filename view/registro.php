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
    <?php
    include("../php/conexion.php");
    include("../php/registro.php");
    ?>
    <section class="form-register">
        <h4>Formulario Registro</h4>
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre" >
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido" >
        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingresa su correo electrònico" >
        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
        <!-- <select class="controls" name="tip_doc" id="tip_doc">
            <option value="0" selected="selected">Selecciona tu tipo de documento</option>
            <option value="1">CEDULA CIUDADANA</option>
            <option value="2">CEDULA EXTRANJERA</option>
            <option value="3">PASAPORTE</option>
        </select>
        <input class="controls" type="tel" name="num_doc" id="num_doc" placeholder="Ingrese su numero de documento">
        <input class="controls" type="tel" namer="numero" id="numero" placeholder="Ingrese su nùmero telefonico" > -->
        <!-- <input class="controls" type="date" name="fecha" id="fecha" placeholder="Ingresa tu fecha de nacimiento"> -->
        <!-- <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Confirme su contraseña" > -->
        <p>Estoy de acuerdo con los <a href="#">Terminos y Condiciones</a></p>
        <input class="botons" type="submit" value="registrar">
        <p><a href="sesion.html">¿Ya tienes una cuenta?</a></p>
    </section>
</body>
</html>