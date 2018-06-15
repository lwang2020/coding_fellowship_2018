<?php
include ('include/include_all.php');

$DisplayInput = SuccessfulMessage('answer');

echo "<h1>";
echo $DisplayInput['Name'];
echo " just applied. </h1>";
echo "<p> They applied for the ";
echo $DisplayInput['Position'];
echo " position. You can reach them at ";
echo $DisplayInput['PhoneNumber'];
echo ". </p>";


 ?>
