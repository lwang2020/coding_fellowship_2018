<html>

	<head>
		<title>Test Education Page </title>
		<link rel='stylesheet' href='testingDesign.css' />
		<link href="https://fonts.googleapis.com/css?family=Oswald:300|Lato:300,400" rel="stylesheet">
	</head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<body>
		<div class = "greenBox">
			<div class = "titleBorder">
				<h1 class = "PageTitle"> &emsp; EDUCATION <h1>
			</div>
			<div class = "content">
				<p style= "font-weight: bold"> Washington University in St. Louis </p>
					<blockquote>
						•	Bachelor of Arts Candidate, May 2020 <br>
						•	Major: Psychology-Neuroscience-Philosophy <br>
						•	Minors: Design, Marketing <br>
					</blockquote>
				<p style= "font-weight: bold"> Honors: </p>
					<blockquote>
						•	Dean's List (Both Fall 2016 and Spring 2017) <br>
						•	GPA: 3.77/4.00 <br>
						•	John B. Ervin Scholarship (full merit scholarship to Washington University in St. Louis) <br>
					</blockquote>
				<p style= "font-weight: bold"> Relevant Courses:</p>
					<blockquote>
						•	<button onclick = "showPsychClasses()"> Psychology Classes </button>	<br>
						• <button onclick = "showMarketingClasses()"> Marketing Classes </button>	<br>
						•	<button onclick = "showDesignClasses()"> Design Classes </button>	<br>
					</blockquote>
				<p style= "font-weight: bold"> Mountain Lakes High School (Diploma 2016) </p>
					<blockquote>
						•	Salutatorian of the Class of 2016 <br>
					</blockquote>
				</div>
		</div>


<!-- test div -->

<div id="psychClasses">
	<p style= "font-weight: bold"> PHILOSOPHY-NEUROSCIENCE-PSYCHOLOGY CLASSES <p>
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


<div id="marketingClasses">
	<p style= "font-weight: bold"> MARKETING CLASSES <p>
	PRINCIPLES OF MARKETING <br>
</div>

<div id="designClasses">
	<p style= "font-weight: bold"> DESIGN CLASSES <p>
	DESIGNING CREATIVITY: INNOVATION ACROSS DISCIPLINES <br>
	DRAWING I
</div>


<div class = "footer">
	<img src = "LW.svg" alt = "LW logo" class = "logo">
	<p class = "Lindsay"> LINDSAY WANG </p>
	<p class = "contact"> (973) 874 - 5591  • <i> LINDSAY.WANG@WUSTL.EDU </i>  <br> 6515 WYDOWN BLVD, ST. LOUIS, MO 63105 </p>
</div>




<script>

function showPsychClasses() {
    var x = document.getElementById("psychClasses");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
showPsychClasses ("psychClasses");

function showMarketingClasses() {
	var y = document.getElementById("marketingClasses");
		if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}

showMarketingClasses ("marketingClasses");


function showDesignClasses() {
	var z = document.getElementById("designClasses");
	if (z.style.display == "none") {
        z.style.display = "block";
    } else {
        z.style.display = "none";
    }
}

showDesignClasses ("designClasses");
</script>





	</body>