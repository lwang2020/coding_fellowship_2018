
<?php
include ('include/include_all.php');
echo
"<link rel='stylesheet' href='maindesign.css' />";

//Naming which tag you're looking at
TagHeader();
$TagHeader = TagHeader();
for($i=0;$i<sizeof($TagHeader);$i++){
	if ($TagHeader[$i]['TagId']==$_REQUEST['tagID']){
		echo "<p class = BigTag> Tag: ".$TagHeader[$i]['Tag']."</p>";
	}
}

echo "<p class = LinkToBlog>Posts with this tag:</p>";

//Displaying which blogposts have that tag
JoinTables();
$JoinTables=JoinTables();
for($i=0;$i<sizeof($JoinTables);$i++){
	if ($JoinTables[$i]['TagId']==$_REQUEST['tagID']){
		echo "<p><a href='viewSQLposts.php?postId=".$JoinTables[$i]['BlogpostId']."'class=LinkToBlog>Blog Post (".$JoinTables[$i]['BlogpostId'].")</a></p>";
	}
}

//Home Button
echo "<p><a href='blogWithComments.php' class='Home'> Home </a></p>";

?>
