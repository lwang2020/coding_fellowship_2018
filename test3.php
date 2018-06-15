<?php
//This is the logout page. Refreshing this is the same thing as logging out.

session_start();

unset ($_SESSION['UserId']);
