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

//Home Button
echo "<p><a href='blogWithComments.php' class='Home'> Home </a></p>";


//Tags
JoinTables();
$JoinTables=JoinTables();

echo "<p class=tagtitle>Tags:</p>";

for($i=0;$i<sizeof($JoinTables);$i++){
	if ($JoinTables[$i]['BlogpostId']==$_REQUEST['postId']){
		echo "<p class = tag ><a href=viewTags.php?tagID=".$JoinTables[$i]['TagId']." class=taglinks>".$JoinTables[$i]['Tag']."</a></p>";
	}
}
