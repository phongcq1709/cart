<?php 
session_start();
unset($_SESSION['CART']);
header('location: index.php');

 ?>