
<?php
include ('include/ResumeInclude.php');
$DisplayPage = DisplayPage();

echo "
<html>
	<head>
		<title>Lindsay Wang | ".$DisplayPage[$_REQUEST['page']]['Header']."</title>
	</head>

<meta name='viewport' content='width=device-width, initial-scale=1.0'>

	<body style='background-color:white'>
		<div class = 'greenBox'>

		<div class='NavBar'>".$DisplayPage[$_REQUEST['page']]['NavigationBar']."</div>

			<div class = 'titleBorder'>
				<h1 class = 'PageTitle'> &emsp;".$DisplayPage[$_REQUEST['page']]['Title']."<h1>
			</div>
		<div class = 'pageContent'> <br>
			".$DisplayPage[$_REQUEST['page']]['Content']."

		<div class = 'pageFooter'>
			<img src = 'LW.svg' alt = 'LW logo' class = 'logo'>
			<p class = 'Lindsay'> LINDSAY WANG </p>
			<p class = 'contact'> (973) 874 - 5591  • <i> LINDSAY.WANG@WUSTL.EDU </i>  <br> APT 1W, 6639 UNIVERSITY DRIVE, ST. LOUIS, MO 63130 </p>
		</div>

		".$DisplayPage[$_REQUEST['page']]['Javascript']."
	</body>
</html>";
