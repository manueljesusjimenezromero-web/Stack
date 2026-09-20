<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mi tienda</title>
    </head>
    <body>
        <br>
        <p>Has entrado el dia:
        <?php echo htmlspecialchars(date('d/m/Y')); ?>
        a las <?php echo htmlspecialchars(date('H:m:s')); ?>
        </p>
        <h1><?php echo htmlspecialchars('Se imprimen variables en html para evitar ataques XSS'); ?></h1>
    </body>
</html>