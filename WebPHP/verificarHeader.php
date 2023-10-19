<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['email'])){
    require_once("headerLog.php");
    
} else{
    require_once("header.php");
}
?>