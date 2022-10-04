<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>formulario de registro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


</head>
<body>
    <div class="Logo-Tuxy">
        
    </div>
    <form class="formulario">
        <br><input type="text" name="usuario" placeholder="usuario" maxlength="20" required><br>
        <br><input type="text" name="nombre" placeholder="Nombre/s" maxlength="30" required><br>
        <br><input type="text" name="apellido" placeholder="Apellido/s" maxlength="30" required><br>
        <br><input type="email" name="email" placeholder="Email" maxlength="50" required><br>
        <br><input type="password" minlength="8" placeholder="Contraseña" maxlength="30" name="contraseña" required><br><p>La contraseña debe tener entre 8 y 30 caracteres</p><br>
        <br><input type="submit" formaction="registrar.php" formmethod="post" value="Registrarse"><br>
        <br><input type="reset"  value="Limpiar campos">
    </form>
    
    <form>
        <br><input type="submit" formaction="inicio.php" formmethod="POST" value="Volver">
    </form>


</body>
</html>