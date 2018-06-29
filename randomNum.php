<html>
	<head>
		<title> Random Number Generator </title>
		<link rel='stylesheet' href='randomNum.css' />
	</head>

	<body>
		<form id= "form" action = '' method= 'post'>
			<p>Click the button to display a random number between </p>
				<input type='text' id="Start">
			<p> and </p>
				<input type='text' id="End">
			<br><br>
				<button type = "button" id= "Submit" onclick = "getRandomInt(min,max)"> give me a number pls </button>
			<p id="number"></p>
		</form>

<script>

	var min = document.getElementById("Start").value;
	var max = document.getElementById('End').value;

	function getRandomInt(min, max) {
		var min = document.getElementById("Start").value;
		var max = document.getElementById('End').value;
	  min = Math.ceil(min);
	  max = Math.floor(max);
	  document.getElementById("number").innerHTML = (Math.floor(Math.random() * (max - min)) + min);
		//The maximum is exclusive and the minimum is inclusive
	}

</script>

	</body>
</html>
