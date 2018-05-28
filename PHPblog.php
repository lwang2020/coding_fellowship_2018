<?php
include ('/Applications/MAMP/htdocs/include/PHPProject.php');
?>


<html>

	<head>
		<title>Lindsay's Blog</title>
		<link rel='stylesheet' href='maindesign.css' />
		<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	</head>

	<body>
		<h1 class='header'> Lindsay's Blog </h1>
		<h2 class='subtitle'>WORDS FROM A GIRL LEARNING HOW TO CODE </h1>

<?php

function PostABlock($blocknumber){
	$sorter=getSorter();
	$item = $sorter[$blocknumber];
		echo "<div class='blogpost'; style='background-color:$item[BlockColor]'>";
		echo "<h3>$item[ArticleTitle]</h3>";
		echo "<p class='white'>$item[Subtitle]</p>";
		echo "<p class='white'><a href=$item[ReadOn]>Read on</a></p>";
}

PostABlock('3');
PostABlock('4');
PostABlock('5');

?>

	</body>
</html>
