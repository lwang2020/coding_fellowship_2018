<?php

include ('include/ResumeInclude.php');


$DisplayPage = DisplayPage();

echo "<h1 class='PageTitle'>".$DisplayPage[$_REQUEST['page']]['Title']."</h1>";
echo "<p class= 'PageSubtitle'>".$DisplayPage[$_REQUEST['page']]['SubTitle']."</p>";
echo "<div class='NavBar'>".$DisplayPage[$_REQUEST['page']]['NavigationBar']."</div>";
echo $DisplayPage[$_REQUEST['page']]['Content'];
