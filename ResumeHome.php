<?php
include ('include/ResumeInclude.php');
?>


<html>

	<head>
		<title>Lindsay Wang | Home</title>
		<link rel='stylesheet' href='ResumeDesign.css' />
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>

	<body>
		<img src = "mock up resume.png" alt = "Resume Mock up" class= "backgroundImage">


		<footer class='NavBar'>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>EXPERIENCE</a>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
		</footer>
	</div>

		<div id = "entirePage">
			<div class="page-wrap">
				<h1 class='header'> Lindsay's Resume </h1>
					<h2 class='subtitle'>A work in progress </h1>
						<p id ='firstObject' class = 'object' onclick = "RunThroughBlurbs('firstBlurb')"> First Object </p>
						<p id ='secondObject' class = 'object' onclick = "RunThroughBlurbs('secondBlurb')"> Second Object </p>
						<p id ='thirdObject' class = 'object' onclick = "RunThroughBlurbs('thirdBlurb')"> Third Object </p>
						<p id ='fourthObject' class = 'object' onclick = "RunThroughBlurbs('fourthBlurb')"> Fourth Object </p>

			</div>

			<div id= '1' class = 'blurb'>
				Blurb 1
				<button onclick = 'HideEverything()'> X out </button>
			</div>

			<div id= '2' class = 'blurb'>
				Blurb 2
				<button onclick = 'HideEverything()'> X out </button>
			</div>

			<div id= '3' class = 'blurb'>
				Blurb 3
				<button onclick = 'HideEverything()'> X out </button>
			</div>

			<div id= '4' class = 'blurb'>
				Blurb 4
				<button onclick = 'HideEverything()'> X out </button>
			</div>




	</body>
</html>


<script src="/include/jquery.js"></script>
<script type = 'text/javascript'>

function HideEverything(){
	$('.blurb').hide();
}

function showBlurb(blurb) {
	var a = document.getElementById(blurb);
		if (a.style.display === 'none') {
				a.style.display = 'block';
		} else {
				a.style.display = 'none';
		}
}


HideEverything();

function RunThroughBlurbs (blurbNumber) {
	if (blurbNumber === 'firstBlurb') {
		HideEverything();
		showBlurb('1');
	}
	else if (blurbNumber === 'secondBlurb') {
		HideEverything();
		showBlurb('2');
	}
	else if (blurbNumber === 'thirdBlurb') {
		HideEverything();
		showBlurb('3');
	}
	else if (blurbNumber === 'fourthBlurb') {
		HideEverything();
		showBlurb('4');
	}
	else {
		HideEverything();
	}
}

//Hides the blurb if you click outside of it

$(document).ready(function(){
    $('#entirePage').mouseup(function(e){
    HideEverything();
    });

		$('.blurb').mouseup(function(e){
			e.stopPropagation();
		});
});

</script>
