<?php
    require_once("conexion.php");
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];           
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
    
        echo "<script>alert('El usuario ya existe.')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {

        $query = "INSERT INTO usuarios (email, contraseña) VALUES ('$email', '$contraseña')";
        
        if (mysqli_query($conexion, $query)) {
        
            echo "<script>alert('Usuario añadido correctamente.')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            $mensaje = "Error al añadir usuario: " . mysqli_error($conexion);
        }
    }
    mysqli_close($conexion);
?>



