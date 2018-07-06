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
		<div class="page-wrap">
			<h1 class='header'> Lindsay's Resume </h1>
				<h2 class='subtitle'>hire me pls </h1>
					<p class ='firstObject' onclick = "RunThroughBlurbs('firstBlurb')"> First Object </p>
					<p class ='secondObject' onclick = "RunThroughBlurbs('secondBlurb')"> Second Object </p>
					<p class ='thirdObject' onclick = "RunThroughBlurbs('thirdBlurb')"> Third Object </p>
					<p class ='fourthObject' onclick = "RunThroughBlurbs('fourthBlurb')"> Fourth Object </p>
		</div>

		<div id= '1'>
			Blurb 1
			<button onclick = 'HideEverything()'> X out </button>
		</div>

		<div id= '2'>
			Blurb 2
			<button onclick = 'HideEverything()'> X out </button>
		</div>

		<div id= '3'>
			Blurb 3
			<button onclick = 'HideEverything()'> X out </button>
		</div>

		<div id= '4'>
			Blurb 4
			<button onclick = 'HideEverything()'> X out </button>
		</div>

		<footer class='NavBar'>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Education'>EDUCATION</a>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Leadership'>LEADERSHIP</a>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Experience'>EXPERIENCE</a>
			<a class='link' href='http://localhost:8888/ResumeStage.php?page=Skills'>SKILLS</a>
		</footer>


	</body>
</html>

<script>

function HideEverything(){
	var i;
	var oneBlurb;
	for (i = 1; i < 5; i++) {
		oneBlurb = document.getElementById(i);
		oneBlurb.style.display = 'none';
	}
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

</script>
