
<?php

include('include/include_ajax.php');

saveBlogPost($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['comment']);

showAjaxComment();


$DisplayComment = showAjaxComment();

echo "<div>";


for($a=0;$a<10;$a++){
			echo
			"<br> <br><p class='CommenterName'> ".$DisplayComment[$a]['Name']." commented:</p>";
			echo
			"<p class='CommenterComment'>".$DisplayComment[$a]['Comment']."</p> <br> <br>";
		}

echo "</div>";
