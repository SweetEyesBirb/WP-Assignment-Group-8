<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["email"]);
unset($_SESSION["role"]);
session_destroy(); // Destroy the entire session
header("Location:../../../index.php");
?>