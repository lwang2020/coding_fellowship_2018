<?php

function echoHeader($title){
	echo "
		<html>
			<head>
				<title>$title</title>
				<link rel='stylesheet' type='text/css' href='/style.css'>
			</head>
			<body>
				<div class='navigationBar'>
					TylerKing.net
				</div>
				<div class='mainBody'>
	";
}

function echoFooter(){
	echo "
				</div>
			</body>
		</html>
	";
}
