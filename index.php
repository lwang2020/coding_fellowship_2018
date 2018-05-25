<?php

include('include/include_all.php');

echoHeader("Welcome to my blog");

echo "
	<h1>Welcome to my blog!</h1>
	<p>
		Here are all the posts:
	</p>
	<ul>
";

$posts = getAllBlogPosts();

foreach($posts as $index=>$post){
	echo "
		<li>
			<a href='view_post.php?postId=$index'>$post[title]</a>
		</li>
	";
}

echo "</ul>";

echoFooter();
