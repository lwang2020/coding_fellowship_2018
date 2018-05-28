<?php
include ('/Applications/MAMP/htdocs/include/PHPProject.php');
?>

<html>

	<head>
		<title> View Blog Posts </title>
		<link rel='stylesheet' href='maindesign.css' />
	</head>

	<body>
		<?php
			$sorter=getSorter();
			$retrieve = $sorter[$_REQUEST['postId']];

			//Title
			echo "<h1 class='titleformat'>$retrieve[Title]</h1>";
			//Picture
			echo $retrieve['Pic'];
			//Paragraph
			echo "<p>$retrieve[Body]</p>";

		?>
	</body>
</html>
