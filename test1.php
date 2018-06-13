<?php
//Normally this is the login page. If the user is already logged in, then maybe just automatically redirect to test2.php
//refreshing this page is the same as "logging in"
//normally you'd have people sign in and validate their username/password
//normally after you log in, this would redirect you to test2.php

session_start();

$_SESSION['UserId'] = 4;


 ?>
