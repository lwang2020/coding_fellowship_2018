<?php

function GetABlogpost($blogpostId){
	$result = dbQuery("
		SELECT *
		FROM Blogposts
		WHERE BlogpostId = $blogpostId
		")->fetch();
	return $result;
}

function Block($blogpostId){
	$try=GetABlogpost($blogpostId);
	echo
		"<div class='blogpost'; style='background-color:$try[BlockColor]'>
		<h3>$try[BlockTitle]</h3>
		<p class='white'>$try[BlockSubtitle]</p>
		<p class='white'><a href=$try[ReadOn]>Read on</a></p>
		</div>";
}

?>
