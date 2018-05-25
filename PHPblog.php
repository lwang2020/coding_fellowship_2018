<html>
	<head>
		<title>Lindsay's Blog</title>
		<link rel='stylesheet' href='maindesign.css' />
		<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	</head>

	<body>
		<h1 class='header'> Lindsay's Blog </h1>
		<h2 class='subtitle'>WORDS FROM A GIRL LEARNING HOW TO CODE </h1>
		<div class='blogpost'; style=background-color:#bc1a1a;>
			<h3>Halfway Done with College </h3>
			<p class='white'>A look back on sophomore year</p>
			<p class='white'><a href='http://localhost:8888/view_post.php?postId=0'>Read on</a></p>
		</div>

		<div class='blogpost'; style=background-color:#153466;>
			<h3>My Summer in St. Louis</h3>
			<p class='white'> Code, run, sleep.</p>
			<p class='white'><a href='http://localhost:8888/view_post.php?postId=1'>Read on</a></p>
		</div>

		<div class='blogpost'; style=background-color:#8fd7e8;>
			<h3>My opinion on carrots</h3>
			<p class='white'> The inside scoop on this special veggie</p>
			<p class='white'><a href='http://localhost:8888/view_post.php?postId=2'>Read on</a></p>
		</div>

<?php
$sorter= array(
	'0'=>array(
		'Title'=>'<h1 class="title">Halfway Done</h1>',
		'Pic'=>'<img src="sophsResized.jpg" alt="All the Amateur sophomores at Senior Send Off." class="photo">',
		'Body'=>'<p>
			Every time I listen to the song Dusty Trails by Lucius I get a little bit sad.
			There\'s a part at the end that speaks a lot to where I am right now. It goes: <br> <br>
			I\'m halfway to misery <br>
			Some say when you go halfway there\'s still plenty of time to return <br>
			Oh, am I halfway to heaven? <br>
			Some may say when you go halfway, you only have halfway to go. <br> <br>
			I can\'t believe sophomore year is over. I can\'t believe I\'ll be a junior soon. That feels so OLD.</p>'),
	'1'=>array(
		'Title'=>'<h1 class="title">Summer in St. Louis</h1>',
		'Pic'=>'<img src="stl.jpg" alt="Downtown St. Louis" class="stl">',
		'Body'=>'<p>
			I am working at Less Annoying CRM this summer and so far it is really awesome.
			Everyone is really chill and all the other "fellows" are super nice.
			It\'s weird to call them fellows though; I feel like I\'m in an old-timey musical.
			Like, "Why hello, you\'re a nice looking fellow. Would you care to learn how to code today?"
			It also seems a little ironic that were called fellows, since this "fellowship" was designed exclusively for women,
			and the term "fellow" has traditionally referred to a male. Is there even a feminine version of the word fellow?
			Fella? Nope, that refers to a man too.
		</p>'),
	'2'=>array(
		'Title'=>'<h1 class="title">My Opinion on Carrots</h1>',
		'Pic'=>'<img src="carrots.jpg" alt="Some carrots" class="carrots">',
		'Body'=>'<p> Everyone needs to chill out about carrots. They\'re not that great.</p>'),
	'1stBlock'=>array(
		'BlockColor'=>'<div class="blogpost"; style=background-color:#bc1a1a;>',
		'ArticleTitle'=>'<h3>Halfway Done with College </h3>',
		'Subtitle'=>'<p class="white">A look back on sophomore year</p>',
		'ReadOn'=>'<p class="white"><a href="http://localhost:8888/view_post.php?postId=0">Read on</a></p>'
	)
);

echo $sorter['1stBlock']['BlockColor'];
echo $sorter['1stBlock']['ArticleTitle'];
echo $sorter['1stBlock']['Subtitle'];
echo $sorter['1stBlock']['ReadOn'];

?>



</body>
</html>
