<html>

	<head>
		<title> View Blog Posts </title>
		<link rel='stylesheet' href='maindesign.css' />
	</head>

	<body>

<?php

$sorter= array(
	'Blog1'=>array(
		'<h1 class="title">Halfway Done</h1>',
		'<img src="sophsResized.jpg" alt="All the Amateur sophomores at Senior Send Off." class="photo">',
		'<p>
			Every time I listen to the song Dusty Trails by Lucius I get a little bit sad.
			Theres a part at the end that speaks a lot to where I am right now. It goes: <br> <br>
			Im halfway to misery <br>
			Some say when you go halfway theres still plenty of time to return <br>
			Oh, am I halfway to heaven? <br>
			Some may say when you go halfway, you only have halfway to go. <br> <br>
			I cant believe sophomore year is over. I cant believe Ill be a junior soon. That feels so OLD.</p>)'),
	'Blog2'=>array(
		'<h1 class="title">Summer in St. Louis</h1>',
		'<img src="stl.jpg" alt="Downtown St. Louis" class="stl">',
		'<p>
			I am working at Less Annoying CRM this summer and so far it is really awesome.
			Everyone is really chill and all the other "fellows" are super nice.
			Its weird to call them fellows though; I feel like Im in an old-timey musical.
			Like, "Why hello, youre a nice looking fellow. Would you care to learn how to code today?"
			It also seems a little ironic that were called fellows, since this "fellowship" was designed exclusively for women,
			and the term "fellow" has traditionally referred to a male. Is there even a feminine version of the word fellow?
			Fella? Nope, that refers to a man too.
		</p>'),
	'Blog3'=>array(
		'<h1 class="title">My Opinion on Carrots</h1>',
		'<img src="carrots.jpg" alt="Some carrots" class="carrots">',
		'<p> Everyone needs to chill out about carrots. Theyre not that great.</p>'),
);


if($_REQUEST['postId']==0){
	echo $sorter['Blog1'][0];
	echo $sorter['Blog1'][1];
	echo $sorter['Blog1'][2];
}

if($_REQUEST['postId']==1){
	echo $sorter['Blog2'][0];
	echo $sorter['Blog2'][1];
	echo $sorter['Blog2'][2];
}

if($_REQUEST['postId']==2){
	echo $sorter['Blog3'][0];
	echo $sorter['Blog3'][1];
	echo $sorter['Blog3'][2];
}
?>
	</body>
</html>
