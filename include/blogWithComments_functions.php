<?php

$Error = array();


function RepopulateComments($info){
		global $Error;
	if(isset($_REQUEST['submitComment']) && (sizeof($Error)>0) && isset($_REQUEST[$info])){
		echo "<input type='text' name=$info value = $_REQUEST[$info] >";
	}
	else {
		echo "<input type='text' name=$info>";
	}
}


function SubmitComment($Name, $Email, $Comment){
		$result = dbQuery("
			INSERT INTO BlogComments(Name, Email, Comment)
			VALUES('$Name', '$Email', '$Comment')
		")->fetch();
}


if(isset($_REQUEST['submitComment'])){
	Validate();
	if((sizeof($Error)) == 0){
		SubmitComment(
				$_REQUEST['NameField'],
				$_REQUEST['EmailField'],
				$_REQUEST['CommentField']
		);
	}
	if(sizeof($Error) > 0){
		echo "<p class='ErrorMessage'>In order to submit a comment, please fill out all the fields!</p>";
	}
}


function Validate(){
	global $Error;
	if (trim($_REQUEST['NameField'] == '') or (strlen($_REQUEST['NameField']) < 3)){
		$Error['NameField']= "required";
	}
	if (trim($_REQUEST['EmailField']) == ''){
		$Error['EmailField']= "required";
	}
	if (trim($_REQUEST['CommentField']) == ''){
		$Error['CommentField']= "required";
	}
}


function DisplayComment(){
	$result = dbQuery("
		SELECT * FROM BlogComments
		ORDER BY id DESC
	")->fetchAll();
	return $result;
}


function JoinTables(){
	$result = dbQuery("
		SELECT Blogposts.BlogpostId, Tags.BlogpostId, Tags.TagId,TheActualTags.TagId, TheActualTags.Tag
		FROM Blogposts
		JOIN Tags ON Blogposts.BlogpostId=Tags.BlogpostId
		JOIN TheActualTags ON Tags.TagId=TheActualTags.TagId
	")->fetchAll();
	return $result;
}

function TagHeader(){
	$result = dbQuery("
		SELECT *
		FROM TheActualTags
	")->fetchAll();
	return $result;
}
