<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once("conexion.php");
    if (isset($_POST['email']) && isset($_POST['contraseña'])) {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        
        $query = "SELECT * FROM usuarios WHERE email='$email' AND contraseña='$contraseña'";
        
        $resultado = mysqli_query($conexion, $query);
        
        if (mysqli_num_rows($resultado) == 1) {
            $_SESSION['email'] = true;
            echo "<script>alert('Inicio de sesión correcto.')</script>";
            echo "<script>window.location = 'users.php'</script>";
            
        } else {
            echo "<script>alert('Email o contraseña incorrectos.')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }
    }
    mysqli_close($conexion);
?>
