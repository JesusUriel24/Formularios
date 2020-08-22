<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Contacto</title>
    <link href='https://fonts.googleapis.com/css2?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">

            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">

            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit"  name="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</body>
</html>