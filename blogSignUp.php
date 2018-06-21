<?php
include ('include/include_all.php');
echo "<link rel='stylesheet' href='maindesign.css' />";

$Errorz = array();

function ValidateSignUp(){
	global $Errorz;
	if (trim($_REQUEST['UName'])==''){
		$Errorz['UName']="required";
	}
	if (trim($_REQUEST['PWord'])==''){
		$Errorz['PWord']= "required";
	}
}

function SignUp($Username, $Password){
	$result = dbQuery("
		INSERT INTO BlogLogIns(Username, Password)
		VALUES('$Username', '$Password')
	")->fetchall();
	return $result;
}


function ConfirmMessage(){
	global $Errorz;
	if(isset($_REQUEST['submitSignUp'])){
	ValidateSignUp();
		if(sizeof($Errorz) == 0){
			SignUp(($_REQUEST['UName']),($_REQUEST['PWord']));
			echo "<p class='ConfirmMsg'>Nice, now you're a member of Lindsay's fanclub. Click <a href = 'http://localhost:8888/blogLogin.php'>here</a> to log in.</p>";
		}
		if(sizeof($Errorz) > 0){
			echo "<p class='ErrorMessage'>You messed up. Try again.</p>";
		}
	}
}


	echo "
	<form action = '' method ='post'>
	  <div class='container'>
			<br><br><br>
			<h1 class='SignInTitle'> BECOME A MEMBER OF LINDSAY'S FANCLUB!</h1> <br> <br>
	    <p class='loginText' style = 'color:black'>Make up a username: <input type='text' name='UName'></p>
	    <p class='loginText' style = 'color:black'>Make up a password: <input type='password' name='PWord'> </p>
				<br>
	    <input type='submit' name='submitSignUp' class='SubmitButton' value='Sign Up'/>";
ConfirmMessage();

echo	  "</div>
	</form>";
