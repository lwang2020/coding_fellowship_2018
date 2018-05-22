<html>
	<body>
		<h1> Four Function Calculator </h1> <br> <br>
			<form action=""
				<p><input type="text" name="variable1"/></p>
				<p>
						<select name="math" id="math">
							<option value='0'>--Select function--</option>
							<option value='add'> + </option>
							<option value='sub'> - </option>
							<option value='mult'> * </option>
							<option value='div'> / </option>
						</select>
				</p>
				<p><input type='text' name='variable2'/></p>
				<input type= 'submit'/>
			</form>
	</body>
</html>

<?php

function Add($variable1, $variable2){
		return $variable1 + $variable2;
}

function Subtract($variable1, $variable2){
		return $variable1 - $variable2;
}

function Multiply($variable1, $variable2){
		return $variable1 * $variable2;
}

function Divide($variable1, $variable2){
		return $variable1 / $variable2;
}


if(isset($_REQUEST['variable1']) && ($_REQUEST['math']=='add')) {
	echo "<h1>The answer is: ".Add($_REQUEST['variable1'], $_REQUEST['variable2'])."</h1>";
} elseif (isset($_REQUEST['variable1']) && ($_REQUEST['math']=='sub')) {
	echo "<h1>The answer is: ".Subtract($_REQUEST['variable1'], $_REQUEST['variable2'])."</h1>";
} elseif (isset($_REQUEST['variable1']) && ($_REQUEST['math']=='mult')) {
	echo "<h1>The answer is: ".Multiply($_REQUEST['variable1'], $_REQUEST['variable2'])."</h1>";
} elseif (isset($_REQUEST['variable1']) && ($_REQUEST['math']=='div')) {
	echo "<h1>The answer is: ".Divide($_REQUEST['variable1'], $_REQUEST['variable2'])."</h1>";
}

?>
