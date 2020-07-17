<?php 
session_start();
unset($_SESSION['name']);
unset($_SESSION['id']);
header('location: ../index.php');
unset($_SESSION['cart']);
?>