<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

<?php

    require('conexion.php');
    // Se Recibe los datos del formulario de registracion
    $usuario=$_POST['usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];
    $rol=2;

    $conectar= conn(); //Ejecutar conexiones a la b.d.

    $sqlverificaruser="select * from registro where reg_user='$usuario'";

    $sqlverificaremail="select * from registro where reg_email='$email'";

    $resultadouser=mysqli_query($conectar,$sqlverificaruser);

    $resultadoemail=mysqli_query($conectar,$sqlverificaremail);

if (isset($resultadouser)) {

    if ($resultadouser->num_rows > 0) {
        
        ?>
            <p>El usuario <strong><?php echo ' '.$usuario; ?></strong> ya existe, elija otro usuario.</p><br><br>
            <form><input type="submit" formaction="registro.php" formmethod="POST" value="Volver"></form>
        <?php
    }

elseif (isset($resultadoemail)) {
    
    if ($resultadoemail->num_rows > 0) {
        
        ?>
            <p>Ese email ya esta registrado</p><br><br>

            <form><input type="submit" formaction="registro.php" formmethod="POST" value="Volver"></form>
        <?php
    }

}
else{

    $sqlregistrar="INSERT INTO registro (reg_user, reg_name, reg_apel, reg_email, reg_pass, rol_id)
    VALUES ('$usuario', '$nombre', '$apellido', '$email', '$contraseña', $rol)";

    mysqli_query($conectar, $sqlregistrar)or trigger_error("Query Failed! SQL- Error:".mysqli_error($conectar), E_USER_ERROR);

if (mysqli_affected_rows($conectar)>0){
    
    ?>
        <p>El usuario <?php echo ' '.$usuario; ?> fue registrado de forma exitosa!</p>
    <?php

}
else {

    ?>
        <p>No se pudieron registrar los datos, intente nuevamente</p>
    <?php    

}
}
}

?>

</body>
</html>
