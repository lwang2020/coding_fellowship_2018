<?php

function getSorter(){
	return array(
		'0'=>array(
			'Title'=>'Halfway Done',
			'Pic'=>'<img src="sophsResized.jpg" alt="All the Amateur sophomores at Senior Send Off." class="photo">',
			'Body'=>'
				Every time I listen to the song Dusty Trails by Lucius I get a little bit sad.
				There\'s a part at the end that speaks a lot to where I am right now. It goes: <br> <br>
				I\'m halfway to misery <br>
				Some say when you go halfway there\'s still plenty of time to return <br>
				Oh, am I halfway to heaven? <br>
				Some may say when you go halfway, you only have halfway to go. <br> <br>
				I can\'t believe sophomore year is over. I can\'t believe I\'ll be a junior soon. That feels so OLD.'),
		'1'=>array(
			'Title'=>'Summer in St. Louis',
			'Pic'=>'<img src="stl.jpg" alt="Downtown St. Louis" class="stl">',
			'Body'=>'
				I am working at Less Annoying CRM this summer and so far it is really awesome.
				Everyone is really chill and all the other "fellows" are super nice.
				It\'s weird to call them fellows though; I feel like I\'m in an old-timey musical.
				Like, "Why hello, you\'re a nice looking fellow. Would you care to learn how to code today?"
				It also seems a little ironic that were called fellows, since this "fellowship" was designed exclusively for women,
				and the term "fellow" has traditionally referred to a male. Is there even a feminine version of the word fellow?
				Fella? Nope, that refers to a man too.
			'),
		'2'=>array(
			'Title'=>'My Opinion on Carrots',
			'Pic'=>'<img src="carrots.jpg" alt="Some carrots" class="carrots">',
			'Body'=>'Everyone needs to chill out about carrots. They\'re not that great.'),
		'3'=>array(
			'BlockColor'=>'#bc1a1a',
			'ArticleTitle'=>'Halfway Done with College',
			'Subtitle'=>'A look back on sophomore year',
			'ReadOn'=>'http://localhost:8888/view_post.php?postId=0'),
		'4'=>array(
			'BlockColor'=>'#153466',
			'ArticleTitle'=>'My Summer in St. Louis',
			'Subtitle'=>'Code, run, sleep.',
			'ReadOn'=>'http://localhost:8888/view_post.php?postId=1'),
		'5'=>array(
			'BlockColor'=>'#8fd7e8',
			'ArticleTitle'=>'My opinion on carrots',
			'Subtitle'=>'The inside scoop on this special veggie',
			'ReadOn'=>'http://localhost:8888/view_post.php?postId=2'
		)
	);
}
?>
