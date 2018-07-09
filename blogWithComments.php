
<?php
include ('include/include_all.php');

session_start();
if (!isset($_SESSION['UserId'])){
	die("You're not logged in. <a href = 'http://localhost:8888/blogLogin.php'> Go to the login page </a>");
}
?>


<html>

	<head>
		<title>Lindsay's Blog</title>
		<link rel='stylesheet' href='maindesign.css' />
		<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	</head>


	<body>
		<h1 class='header'> Lindsay's Blog </h1>
		<h2 class='subtitle'>WORDS FROM A GIRL LEARNING HOW TO CODE </h1>
		<p class='logInNotice'>(You're logged in.  <a href ='http://localhost:8888/blogLogOut.php'> Click here to log out.</a>)</p>

			<?php


Block(4);
Block(5);
Block(6);

echo "
	<h1 class='SubmitAComment'> Submit a comment </h1>
	<form action='' method='post'>
		<table class='SubmitForm'>
		  <tr>
		    <td>
		      Name:
		    </td>
		    <td>";
					RepopulateComments('NameField');
echo
		    "</td>
		  </tr>
		  <tr>
		    <td>
		      Email:
		    </td>
		    <td>";
					RepopulateComments('EmailField');
echo
				"</td>
		  </tr>
			<tr>
				<td>
					Comment:
				</td>
				<td>";
					RepopulateComments('CommentField');
echo
				"</td>
			</tr>
	</table>
		<br/>
		<input class='SubmitButton' input type='submit' name='submitComment' value='Submit'/>
	</form>
";

$DisplayComment = DisplayComment();

echo "<div>";


for($a=0;$a<10;$a++){
			echo
			"<br> <br><p class='CommenterName'> ".$DisplayComment[$a]['Name']." commented:</p>";
			echo
			"<p class='CommenterComment'>".$DisplayComment[$a]['Comment']."</p> <br> <br>";
		}

echo "</div>";

		?>

	</body>
</html>
