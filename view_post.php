<?php
include ('/include/PHPProject.php');
 ?>


<html>

	<head>
		<title> View Blog Posts </title>
		<link rel='stylesheet' href='maindesign.css' />
	</head>
	<body>

<?php



echo $sorter[$_REQUEST['postId']]['Title'];
echo $sorter[$_REQUEST['postId']]['Pic'];
echo $sorter[$_REQUEST['postId']]['Body'];


?>
	</body>
</html>
