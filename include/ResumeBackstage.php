<?php
 
function DisplayPage(){
	return array(
		'Education'=>array(
			'Title'=>"EDUCATION",
			'SubTitle'=>"Shoutout to public schools",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>WORK</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				",
			'Content'=>"
<pre>
			Washington University in St. Louis
			•	Bachelor of Arts Candidate, May 2020
			•	Major: Psychology-Neuroscience-Philosophy
			•	Minors: Design, Marketing
			Honors:
			•	Dean's List (Both Fall 2016 and Spring 2017)
			•	GPA: 3.77/4.00
			•	John B. Ervin Scholarship (full merit scholarship to Washington University in St. Louis)
			Relevant Courses: (Maybe have these be organized by what job area i'm looking at. Like, mouse over 'design' or 'psychology' or 'marketing' etc )
			Mountain Lakes High School (Diploma 2016)
			•	Salutatorian of the Class of 2016
</pre>
		"),
		'Leadership'=>array(
			'Title'=>"LEADERSHIP",
			'SubTitle'=>"I'm a natural leader",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>WORK</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				",
		'Content'=>"
<pre>
			Assistant Group Coordinator of the Washington University Amateurs A Cappella
				•	In charge of marketing and PR, including social media and designing print media
				•	Delegates and handles responsibilities given by the Group Coordinator
				•	Works collaboratively with team members to plan concerts, gigs, and group travel
				•	Event photographer
			Social Media Coordinator of the Washington University A Cappella Advisory Council (ACAC)
				•	Established executive decisions on events for the WashU a cappella community, including We Sing for Ice Cream and auditions
				•	Designed advertisements and social media posters
				•	Used Facebook, Instagram, and email to communicate to new students and promote events
			Class President
				•	Organized class fundraisers and social events, such as Empty Bowls (a fair that raised money for homeless shelters)
				•	Led executive board meetings of 6 other students
				•	Updated peers on upcoming event
</pre>
		"),
		'Experience'=>array(
			'Title'=>"WORK EXPERIENCE",
			'SubTitle'=>"I have had jobs in the past!",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				",
			'Content'=> "
<pre>
			Ix Style - Marketing/PR Intern
				•	In charge of contacting media publications and editors for fashion feature requests
				•	Reorganized customer service system to make it more user-friendly
				•	Researched speaking opportunities for the Ix Style brand and reached out to wholesale vendors
			Panera Bread - Cashier
				•	Trained in customer service skill
			New Tang Dynasty Television - Intern
				•	Researched and published original articles
				•	Worked collaboratively to edit newspaper articles before publication
</pre>
		"),
		'Skills'=>array(
			'Title'=>"SKILLS",
			'SubTitle'=>"I have so many fucking skills",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>WORK</a>
				",
			'Content'=>"
<pre>
				•	Proficient in video editing, Microsoft Word, PowerPoint, Excel and Photoshop
				•	Excellent at design and creative marketing
				•	Photographer
				•	Fluent in Mandarin, proficient in French
</pre>
		")
	);
}
