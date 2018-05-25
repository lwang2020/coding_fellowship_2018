<?php

function getAllBlogPosts(){
	return array(
			1 => array(
				"title" => "This is my first post!",
				"body" => "
					<p>I don't know what to write about</p>
					<p>This is the second paragraph</p>
				"
			),
			2 => array(
				"title" => "I think summer is neat!",
				"body" => "
					<p>The outdoor seating at Kaldi's in Citygarden is
					<strong>the best</strong>.</p>
				"
			),
			3 => array(
				"title" => "Jack in the box",
				"body" => "
					<p>I like all fast food (except Burger King) but I must say,
					the absolute best in Jack in the Box.</p>
				"
			),
	);
}

//This one just gets a specific post
function getBlogPost($postId){
	$AllPosts = getAllBlogPosts();
	return $AllPosts[$postId];
}
