<?php

function DisplayPage(){
	return array(
		'Education'=>array(
			'Header'=> "Education",
			'Title'=> "EDUCATION",
			'Content'=>"
							<p style= 'font-weight: bold'> Washington University in St. Louis </p>
								<blockquote>
									•	Bachelor of Arts Candidate, May 2020 <br>
									•	Major: Psychology-Neuroscience-Philosophy <br>
									•	Minors: Design, Marketing <br>
								</blockquote>
							<p style= 'font-weight: bold'> Honors: </p>
								<blockquote>
									•	Dean's List (Both Fall 2016 and Spring 2017) <br>
									•	GPA: 3.77/4.00 <br>
									•	John B. Ervin Scholarship (full merit scholarship to Washington University in St. Louis) <br>
								</blockquote>
							<p style= 'font-weight: bold'> Relevant Courses:</p>
								<blockquote>
									•	<button onclick = 'showPsychClasses()'> Psychology Classes </button>	<br>
									• <button onclick = 'showMarketingClasses()'> Marketing Classes </button>	<br>
									•	<button onclick = 'showDesignClasses()'> Design Classes </button>	<br>
								</blockquote>
							<p style= 'font-weight: bold'> Mountain Lakes High School (Diploma 2016) </p>
								<blockquote>
									•	Salutatorian of the Class of 2016 <br>
								</blockquote>
						</div>
					</div>

					<div id='psychClasses'>
						<p style= 'font-weight: bold'> PHILOSOPHY-NEUROSCIENCE-PSYCHOLOGY CLASSES <p>
						INTRODUCTION TO PSYCHOLOGY <br>
						EXPERIMENTAL PSYCHOLOGY <br>
						INTRODUCTION TO PSYCHOLOGICAL STATISTICS<br>
						INTRODUCTION TO SOCIAL PSYCHOLOGY <br>
						INTRODUCTION TO HUMAN EVOLUTION<br>
						INTRODUCTION TO LINGUISTICS <br>
						INTRODUCTION TO COGNITIVE SCIENCES<br>
						ADVANCED EPISTEMOLOGY <br>
						PHILOSOPHY OF LANGUAGE <br>
						GREAT PHILOSOPHERS
					</div>

					<div id='marketingClasses'>
						<p style= 'font-weight: bold'> MARKETING CLASSES <p>
						PRINCIPLES OF MARKETING <br>
					</div>

					<div id='designClasses'>
						<p style= 'font-weight: bold'> DESIGN CLASSES <p>
						DESIGNING CREATIVITY: INNOVATION ACROSS DISCIPLINES <br>
						DRAWING I
					</div>",
			'Javascript' =>"
				<script>
					function showPsychClasses() {
					    var x = document.getElementById('psychClasses');
					    if (x.style.display === 'none') {
					        x.style.display = 'block';
					    } else {
					        x.style.display = 'none';
					    }
					}
					showPsychClasses ('psychClasses');
					function showMarketingClasses() {
						var y = document.getElementById('marketingClasses');
							if (y.style.display === 'none') {
					        y.style.display = 'block';
					    } else {
					        y.style.display = 'none';
					    }
					}
					showMarketingClasses ('marketingClasses');
					function showDesignClasses() {
						var z = document.getElementById('designClasses');
						if (z.style.display == 'none') {
					        z.style.display = 'block';
					    } else {
					        z.style.display = 'none';
					    }
					}
					showDesignClasses ('designClasses');
				</script>
		",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>EXPERIENCE</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				"
		),

		'Leadership'=>array(
			'Header'=> "Leadership",
			'Title'=> "LEADERSHIP",
			'Content'=>"
				<p style= 'font-weight: bold'> Director of Marketing - Washington University Amateurs A Cappella </p>
					<blockquote>
						• In charge of marketing and PR, including social media and designing print media <br>
						• Delegates and handles responsibilities given by the Group Coordinator <br>
						• Event photographer
					</blockquote>
				<p style= 'font-weight: bold'> Social Media Coordinator - Washington University A Cappella Advisory Council (ACAC) </p>
					<blockquote>
						• Established executive decisions on events for the WashU a cappella community, including We Sing for Ice Cream and auditions <br>
						• Designed advertisements and social media posters <br>
						• Used Facebook, Instagram, Twitter, email and print media to
						communicate to new students and promote event
					</blockquote>
				</div>

			",
			'NavigationBar'=>
					"
						<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
						<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
						<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>EXPERIENCE</a>
						<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
					"
				),
		'Experience'=>array(
			'Header'=> "Experience",
			'Title'=> "EXPERIENCE",
			'Content'=>"
				<p style= 'font-weight: bold'> Less Annoying CRM - Coding Fellow </p>
					<blockquote>
						• Learned CSS, HTML, MySQL, PHP, and Javascript <br>
						• Learned how to implement web development skills to design websites
					</blockquote>
				<p style= 'font-weight: bold'> Ix Style - Marketing/PR Intern </p>
					<blockquote>
						• In charge of contacting media publications and editors for fashion feature requests <br>
						• Reorganized customer service system to make it more user-friendly <br>
						• Researched speaking opportunities for the Ix Style brand and reached out to wholesale vendors
					</blockquote>
				<p style= 'font-weight: bold'> New Tang Dynasty Television - Intern </p>
					<blockquote>
						• Researched and published original articles <br>
						• Worked collaboratively to edit newspaper articles before publication
					</blockquote>
				</div>
			",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
				"
		),
		'Skills'=>array(
			'Header'=> "Skills",
			'Title'=> "SKILLS",
			'Content'=>"
					<p>
						• Video editing, Microsoft Word, Powerpoint, Excel, Photoshop, Adobe Illustrator <br>
						• Excellent at design and creative marketing <br>
						• Photographer <br>
						• Fluent in Mandarin, proficient in French and Spanish <br>
					</p>
				</div>
			",
			'NavigationBar'=>
				"
					<a class='link' href='http://localhost:8888/ResumeHome.php'>HOME</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
					<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>EXPERIENCE</a>
				",
		)
	);
}
