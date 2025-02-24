<!DOCTYPE html>
<html>
<head>
    <title>Página de administración de roles</title>
</head>
<body>
    <form method="POST" action="roles.php">
        <fieldset>
            <legend>Modificar roles</legend>
            <input type="text" name="usuario" maxlength="20">
            Nuevo Rol:
            <input type="text" name="rol" maxlength="1">
            <input type="submit" name="aceptar" value="Aceptar">
        </fieldset>
    </form>
    <?php
        include 'Usuario.php';
        session_start();

        foreach ($_SESSION as $usuario)
        {
            if($usuario->get_rol() != 3)
            {
                header('www.ejemplo.com/error.php');
                exit;
            }
        }

        if (isset($_POST['aceptar']) )
        {
            foreach ($_SESSION as $usuario)
            {
                if ($usuario->usuario == md5($_POST['usuario']) )
                {
                    if ($_POST['rol'] == 1 || $_POST['rol'] == 2 || $_POST['rol'] == 3)
                    {
                        $usuario->set_rol($_POST['rol']);
                    }
                    else
                    {
                        echo '<strong style="color:red"> Rol no válido </strong>';
                    }
                }
                else
                {
                    echo '<strong style="color:red"> Usuario no encontrado </strong>';
                }
            }
        }
    ?>
</body>
</html>
