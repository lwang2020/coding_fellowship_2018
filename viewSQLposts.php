<?php
include ('include/include_all.php');
?>


<html>
	<head>
		<title> View Blog Posts </title>
		<link rel='stylesheet' href='maindesign.css' />
	</head>

</html>

<?php

$test=GetABlogpost($_REQUEST['postId']);

//Title
echo "<h1 class='titleformat'>$test[BlogTitle]</h1>";

//Picture
echo $test['BlogPic'];

//Paragraph
echo "<p>$test[BlogParagraph]</p>";
