<?php

function DisplayPage(){
	return array(
		'Education'=>array(
			'Title'=>"EDUCATION",
			'SubTitle'=>"Shoutout to public schools",
			'NavigationBar'=>
				"<div class='NavBar'>
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>WORK</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				</div>",
			'Content'=>"More stuff about education blah blah I went to school."
		),
		'Leadership'=>array(
			'Title'=>"LEADERSHIP",
			'SubTitle'=>"I'm a natural leader",
			'NavigationBar'=>
				"<div class='NavBar'>
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>WORK</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				</div>",
			'Content'=>"More stuff about me leading people"
		),
		'Experience'=>array(
			'Title'=>"WORK EXPERIENCE",
			'SubTitle'=>"I have had jobs in the past!",
			'NavigationBar'=>
				"<div class='NavBar'>
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				</div>",
			'Content'=> "work work work work work"
		),
		'Skills'=>array(
			'Title'=>"SKILLS",
			'SubTitle'=>"I have so many fucking skills",
			'NavigationBar'=>
				"<div class='NavBar'>
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>WORK</a>
				</div>",
			'Content'=> "I can read and speak languages"
		)
	);
}
