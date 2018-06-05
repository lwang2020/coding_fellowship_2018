<?php

include ('include/ResumeInclude.php');


$DisplayPage = DisplayPage();

echo "<h1 class=PageTitle>.$DisplayPage[$_REQUEST[page]][Title]</h1>";
echo $DisplayPage[$_REQUEST['page']]['SubTitle'];
echo $DisplayPage[$_REQUEST['page']]['NavigationBar'];
echo $DisplayPage[$_REQUEST['page']]['Content'];
