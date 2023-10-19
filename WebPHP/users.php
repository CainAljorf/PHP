<?php
    require_once("verificarLogin.php");
    require_once("verificarHeader.php");
?>
    <div class= "caja">
    <h1>Lista de usuarios</h1>
    <table class="table">
<thead>
<tr>
    <th>Login</th>
    <th>Contraseña</th>
</tr>
</thead>
<?php
    require_once("conexion.php");
    $query = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $query);
    
    if (mysqli_num_rows($resultado) > 0) {
        
        while ($fila = mysqli_fetch_assoc($resultado)) {
            
            $email = $fila['email'];
            $contraseña = $fila['contraseña'];
            echo '
            
            <tbody>
            <tr>';
            echo "<td>$email</td>
                <td>$contraseña</td>
            </tr> 
            </tbody> 
            ";
            
        }
    } else {
        echo "<h2>No hay usuarios en la base de datos.</h2>";
    }
    mysqli_close($conexion);
    echo '</table></div>';
    
    require_once("footer.php");
?>

