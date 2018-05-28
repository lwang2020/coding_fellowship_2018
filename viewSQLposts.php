<?php
include ('include/SQLProject.php');
?>


<html>
	<head>
		<title> View Blog Posts </title>
		<link rel='stylesheet' href='maindesign.css' />
	</head>
</html>

<?php
include('config/config.php');
include('include/db_query.php');


function GetAllBlogposts($blogpostId){
	$result = dbQuery("
		SELECT *
		FROM Blogposts
		WHERE BlogpostId = $blogpostId
		")->fetch();
	return $result;
}


$test=GetAllBlogposts($_REQUEST['postId']);

//Title
echo "<h1 class='titleformat'>$test[BlogTitle]</h1>";

//Picture
echo $test['BlogPic'];

//Paragraph
echo "<p>$test[BlogParagraph]</p>";
