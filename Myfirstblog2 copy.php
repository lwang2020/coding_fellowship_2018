<html>
	<head>
		<title>Lindsay's Blog</title>
		<link rel='stylesheet' href='maindesign.css' />
		<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	</head>
<!--
	<body>
		<h1 class='header'> Lindsay's Blog </h1>
		<h2 class='subtitle'>WORDS FROM A GIRL LEARNING HOW TO CODE </h1>
		<div class='blogpost'; style=background-color:#bc1a1a;>
			<h3>Halfway Done with College </h3>
			<p class='white'>A look back on sophomore year</p>
			<p class='white'><a href='BlogPost1.html'>Read on</a></p>
		</div>

		<div class='blogpost'; style=background-color:#153466;>
			<h3>My Summer in St. Louis</h3>
			<p class='white'> Code, run, sleep.</p>
			<p class='white'><a href='BlogPost2.html'>Read on</a></p>
		</div>

		<div class='blogpost'; style=background-color:#8fd7e8;>
			<h3>My opinion on carrots</h3>
			<p class='white'> The inside scoop on this special veggie</p>
			<p class='white'><a href='blogpost3.html'>Read on</a></p>
		</div>
	-->


<?php

//imagine this means that you pressed the Read link under blog post 1, on the main page

//This is all the titles, pictures, and words of the three blogs in an array.
$sorter= array(
	'Blogtitle'=>array('Bt1','Bt2','Bt3'),
	'Blogpic'=>array('pic1','pic2','pic3'),
	'Blogwords'=>array('words1','words2','words3')
);













//This is a test to use the array to activate to the next part.
/*
if( the right link for blog 1 is pressed $e=1){
	$sorter['Blogtitle'][0];
	$sorter['Blogwords'][0];
}

if ($f=2) {
	$sorter['Blogtitle'][1];
	$sorter['Blogwords'][1];
}




//This says that if a button were pressed to make the above part happen
//then it knows through the array that it's supposed to say the appropriate title.
if ($sorter='Bt1'){
	echo "<h1 class='title'>Halfway Done</h1>";
}

if ($sorter='pic1'){
	echo "<img src='sophsResized.jpg' alt='All the Amateur sophomores at Senior Send Off.' class='photo'>";
}
if ($sorter='words1'){
	echo "<p>
			Every time I listen to the song Dusty Trails by Lucius I get a little bit sad.
			There's a part at the end that speaks a lot to where I am right now. It goes: <br> <br>
			I'm halfway to misery <br>
			Some say when you go halfway there's still plenty of time to return <br>
			Oh, am I halfway to heaven? <br>
			Some may say when you go halfway, you only have halfway to go. <br> <br>
			I can't believe sophomore year is over. I can't believe I'll be a junior soon. That feels so OLD.</p>";
}


//This part is for Blogpost 2

if ($sorter='Bt2'){
	echo "<h1 class='title'>Summer in St. Louis</h1>";
}

if ($sorter='pic2'){
	echo "<img src='stl.jpg' alt='Downtown St. Louis' class='stl'>";
}

if ($sorter='words2'){
	echo "<p>
		I am working at Less Annoying CRM this summer and so far it is really awesome.
		Everyone is really chill and all the other fellows are super nice.
		It's weird to call them fellows though; I feel like I'm in an old-timey musical.
		Like, Why hello, you're a nice looking fellow. Would you care to learn how to code today?
		It also seems a little ironic that we're called fellows, since this fellowship was designed exclusively for women,
		and the term fellow has traditionally referred to a male. Is there even a feminine version of the word fellow?
		Fella? Nope, that refers to a man too.
	</p>";
}

//And this is for Blogpost 3

if ($sorter='Bt3'){
	echo "<h1 class='title'>My Opinion on Carrots</h1>";
}

if ($sorter='pic3'){
	echo "<img src='carrots.jpg' alt='Some carrots' class='carrots'>";
}

if ($sorter='words3'){
	echo "<p> Everyone needs to chill out about carrots. They're not that great.</p>";
}





if(
	//you click on the first blog post link on the main page)
	{
	echo $sorter['Blogtitle'][0];
}
$Bt1='Halfway Done';
$Bt2='Stl summer';
$Bt3='Carrot post';
$pic1='amateurspic';
$pic2='courthousepic';
$pic3='carrotpic';
$words1='Half done words';
$words2='Summer words';
$words3='Carrot words';






echo"
<h1 class='Bt1'>Halfway Done</h1>
<div style='max-width:800px; margin:auto; background-color:white; padding:10px'>
<p>
	Every time I listen to the song Dusty Trails by Lucius I get a little bit sad.
	There's a part at the end that speaks a lot to where I am right now. It goes: <br> <br>
	I'm halfway to misery <br>
	Some say when you go halfway there's still plenty of time to return <br>
	Oh, am I halfway to heaven? <br>
	Some may say when you go halfway, you only have halfway to go. <br> <br>
	I can't believe sophomore year is over. I can't believe I'll be a junior soon. That feels so OLD.</p>";

*/

















?>

	</body>

</html>
