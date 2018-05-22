<html>
	<body>
		<h1> Color Calculator </h1> <br> <br>
			<form action=""

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
	</body>
</html>

<?php

//all error messages
if (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='0') {
	echo "<h1>Please choose two colors.</h1>";
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color2']=='0') {
	echo "<h1>Please choose two colors.</h1>";
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color2']=='0' && $_REQUEST['color1']=='0') {
	echo "<h1>Please choose two colors.</h1>";
// all the possible colors
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Red' && $_REQUEST['color2']=='Blue') {
	echo "<h1>Purple!</h1>";
	echo '<body style="background-color:#d596ff">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Red' && $_REQUEST['color2']=='Yellow') {
	echo "<h1>Orange!</h1>";
	echo '<body style="background-color:#ef7204">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Red' && $_REQUEST['color2']=='Red') {
	echo "<h1>Super red!</h1>";
	echo '<body style="background-color:#ef0404">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Blue' && $_REQUEST['color2']=='Blue') {
	echo "<h1>Super blue!</h1>";
	echo '<body style="background-color:#93eeff">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Blue' && $_REQUEST['color2']=='Yellow') {
	echo "<h1>Green!</h1>";
	echo '<body style="background-color:#78e05e">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Blue' && $_REQUEST['color2']=='Red') {
	echo "<h1>Purple!</h1>";
	echo '<body style="background-color:#d596ff">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Yellow' && $_REQUEST['color2']=='Blue') {
	echo "<h1>Green!</h1>";
	echo '<body style="background-color:#78e05e">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Yellow' && $_REQUEST['color2']=='Yellow') {
	echo "<h1>Super yellow!</h1>";
	echo '<body style="background-color:#f9f100">';
} elseif (isset($_REQUEST['color1']) && isset($_REQUEST['color2']) && $_REQUEST['color1']=='Yellow' && $_REQUEST['color2']=='Red') {
	echo "<h1>Orange!</h1>";
	echo '<body style="background-color:#ef7204">';
}

//the home button
if (isset($_REQUEST['color1']) or isset($_REQUEST['color2'])) {
	echo "<p><a href='colorcalculator.php'> Home </a></p>";
}
?>
