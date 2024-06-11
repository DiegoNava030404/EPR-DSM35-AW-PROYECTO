<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-18mE4kWBq78iYhF1dvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="Styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>Inicio de sesion</title>
    </head>
    <body>
        <form action="IniciarSesion.php" method="POST">
            <i class="fa-solid fa-user"></i>
            <label>Usuario</label>
            <input type="text" name="Usuario" placeholder="Nombre de Usuario">
            <i class="fa-solid fa-unlock"></i>
            <label>Contraseña</label>
            <input type="text" name="Contraseña" placeholder="Contraseña">

            <button type="submit">Iniciar Sesion</button>
            <a href="CrearCuenta.php">Crear Cuenta</a>

        </form>
    </body>
</html>