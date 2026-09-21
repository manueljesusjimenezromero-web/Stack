<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Demostracion de web dinamica</title>
    </head>
    <body>
        <h1>Demostracion de web dinamica</h1>
        <br>

        <p>Has entrado el dia:
        <?php echo htmlspecialchars(date('d/m/Y')); ?>
        a las <?php echo htmlspecialchars(date('H:m:s')); ?>
        </p>
        <p><Strong><?php echo htmlspecialchars('Una buna practica es imprimir variables en html para evitar ataques XSS'); ?></Strong></p>
    </body>
</html>