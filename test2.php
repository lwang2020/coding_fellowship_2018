<?php

//This is the display page. If it you are logged in, it will display all the session information from a database//
//If you are not logged in, it will tell you you're not logged in and tell you to go to test3.php
session_start();



//It might be a good idea to turn this into a function and use it to verify logins everywhere
if (!isset($_SESSION['UserId'])){
	die("You're not logged in. <a href = 'test1.php'> Go to the login page </a>");
}


echo "You're logged in as user". $_SESSION['UserId']. "
<br/> <br/>
<a href ='test3.php'> Log out </a>";


?>
