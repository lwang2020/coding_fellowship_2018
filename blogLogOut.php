<?php
session_start();
unset ($_SESSION['UserId']);
header("location:http://localhost:8888/blogLogin.php");
?>
