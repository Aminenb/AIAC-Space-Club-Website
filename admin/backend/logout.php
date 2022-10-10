<?php 
session_start();
session_unset();

// destroy the session
session_destroy();
header('Location:/space_club/admin/adminViews/Login.php');


?>