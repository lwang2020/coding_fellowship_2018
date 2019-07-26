<html>
    

	<head>
		<title>Four Function Calculator</title>
	</head>

	<body>
		<h1> Color Calculator </h1> <br> <br>
			<form action="">
				<p>First Color
						<select name="color1" class="color1">
							<option value='0'>--Select function--</option>
							<option value='Red'> Red </option>
							<option value='Yellow'> Yellow </option>
							<option value='Blue'> Blue </option>
						</select>
				</p>
				<br>
				<p> mixed with </p>
				<br>
				<p>Second Color
						<select name="color2" class="color2">
							<option value='0'>--Select function--</option>
							<option value='Red'> Red </option>
							<option value='Yellow'> Yellow </option>
							<option value='Blue'> Blue </option>
						</select>
				</p>
				<input type= "submit"/> <br>

			</form>


<?php

//The background colors
$BackgroundColor= array(
	//0. Purple
	'<body style="background-color:#d596ff">',
	//1. Orange
	'<body style="background-color:#ef7204">',
	//2. Green
	'<body style="background-color:#78e05e">',
	//3. super red
	'<body style="background-color:#ef0404">',
	//4. super Yellow
	'<body style="background-color:#f9f100">',
	//5. super Blue
	'<body style="background-color:#93eeff">'
);

//The color words
$ColorWords= array(
	"<h1>Purple!</h1>",
	"<h1>Orange!</h1>",
	"<h1>Green!</h1>",
	"<h1>Super red!</h1>",
	"<h1>Super yellow!</h1>",
	"<h1>Super blue!</h1>"
);

//the home button
if (isset($_REQUEST['color1']) or isset($_REQUEST['color2'])) {
	echo "<p><a href='colorcalculator.php'> Home </a></p>";
}

//error messages
if (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && ($_REQUEST['color1']=='0' || $_REQUEST['color2']=='0')) {
	echo "<h1>Please choose two colors.</h1>";
// all the possible colors
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Red' && $_REQUEST['color2']=='Blue') {
	echo $ColorWords[0];
	echo $BackgroundColor[0];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Red' && $_REQUEST['color2']=='Yellow') {
	echo $ColorWords[1];
	echo $BackgroundColor[1];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Red' && $_REQUEST['color2']=='Red') {
	echo $ColorWords[3];
	echo $BackgroundColor[3];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Blue' && $_REQUEST['color2']=='Blue') {
	echo $ColorWords[5];
	echo $BackgroundColor[5];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Blue' && $_REQUEST['color2']=='Yellow') {
	echo $ColorWords[2];
	echo $BackgroundColor[2];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Blue' && $_REQUEST['color2']=='Red') {
	echo $ColorWords[0];
	echo $BackgroundColor[0];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Yellow' && $_REQUEST['color2']=='Blue') {
	echo $ColorWords[2];
	echo $BackgroundColor[2];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Yellow' && $_REQUEST['color2']=='Yellow') {
	echo $ColorWords[4];
	echo $BackgroundColor[4];
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Yellow' && $_REQUEST['color2']=='Red') {
	echo $ColorWords[1];
	echo $BackgroundColor[1];
}

?>

</body>
</html>
