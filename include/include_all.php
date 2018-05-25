<?php

/*
	This file includes all the other files in the include folder. This way
	you can include just this one file at the top of each web page and you'll
	automatically have access to all of your funtions from every page.
*/

//include this one first because it defines globals we'll need later
include('config/config.php');

include('include/blog.php');
include('include/db_query.php');
include('include/header.php');
