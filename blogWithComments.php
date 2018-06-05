
<?php
include ('include/include_all.php');
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

			<?php

Block(4);
Block(5);
Block(6);

echo "
	<h1> Submit a comment </h1>
	<form action='' method 'post'>
		<table>
		  <tr>
		    <td>
		      Name:
		    </td>
		    <td>
					<input type='text' name='NameField'>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      Email:
		    </td>
		    <td>
					<input type='text' name='EmailField'>
		    </td>
		  </tr>
		<tr>
			<td>
				Comment:
			</td>
			<td>
				<input type='text' name='CommentField' class='CommentField'>
			</td>
		</tr>
	</table>
		<br/><br/>
		<input type='submit' name='submitComment' value='Submit'/>
	</form>
";

function SubmitComment($Name, $Email, $Comment){
		$result = dbQuery("
			INSERT INTO BlogComments(Name, Email, Comment)
			VALUES('$Name', '$Email', '$Comment')
		")->fetch();
}

if(isset($_REQUEST['submitComment'])){
		SubmitComment(
				$_REQUEST['NameField'],
				$_REQUEST['EmailField'],
				$_REQUEST['CommentField']
		);
}

function DisplayComment(){
	*START HERE*****
}




		?>
	</body>
</html>
