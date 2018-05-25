<?php
include('include/include_all.php');

$post = getBlogPost($_REQUEST['postId']);

echoHeader($post['title']);

echo "
	<h1>$post[title]</h1>
	<div class='blogPostBody'>
		$post[body]
	</div>
";

echoFooter();
