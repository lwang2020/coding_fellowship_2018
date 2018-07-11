<?php

include ('config/config.php');
include ('include/db_query.php');
include ('include/blogWithComments_functions.php');

function saveBlogPost($name, $email, $comment){
	$result = dbQuery("
		INSERT INTO BlogComments(Name, Email, Comment)
		VALUES('$name', '$email', '$comment')
	")->fetch();
}

function showAjaxComment(){
	$result = dbQuery("
		SELECT * FROM BlogComments
		ORDER BY id DESC
	")->fetchAll();
	return $result;
}
