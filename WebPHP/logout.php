<?php
@session_start();
session_destroy();
echo "<script>alert('Has cerrado sesión.')</script>";
echo "<script>window.location = 'index.php'</script>";
?>