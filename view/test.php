<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css">
</head>
<body>
    <form method="post">
        <h1>ingresa</h1>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>
    <?php
    include("../php/registro.php");
    ?>
</body>
</html>