<?php
include ('include/include_all.php');
echo "<link rel='stylesheet' href='maindesign.css' />";


function CheckLoginInDB(){
	$result = dbQuery("
		SELECT Username, Password
		FROM BlogLogIns
	")->fetchall();
	return $result;
}


CheckLogininDB();
$CheckLoginInDB = CheckLoginInDB();



function VerifyLogin(){
	global $CheckLoginInDB;
	for($i=0;$i<sizeof($CheckLoginInDB);$i++){
		if ($CheckLoginInDB[$i]['Username']==$_REQUEST['Username'] && $CheckLoginInDB[$i]['Password']==$_REQUEST['Password']){
			session_start();
			$_SESSION['UserId'] = 'member';
			header("location:http://localhost:8888/blogWithComments.php");
		}
	}
}

function DisplayErrorMessage(){
	if(isset($_REQUEST['submit'])){
		VerifyLogin();
		echo "<p class='ErrorMessage'>You messed up. <a href='http://localhost:8888/blogLogin.php'>Let's try that again.</a></p>";
	}
}


echo "<form action=''>
  <div class='loginBlock' style = 'background-color: #bc1a1a'>
		<br><br>
		<h1 class = 'LOGIN'>LOG IN</h1>".DisplayErrorMessage()."
	</div>

	<div class='loginBlock' style='background-color:#153466'>
		<br><br><br>
			<p class='loginText'> Username: <input type='text' name='Username' required> </p> <br>
			<p class='loginText'>Password: <input type='password' name='Password' required> </p> <br>
			<input type='submit' name='submit' value='Log In'/>
	</div>

	<div class='loginBlock' style='background-color:#8fd7e8'>
		<br><br>
		<p class = 'loginText'> Are you new here? <a href='http://localhost:8888/blogSignUp.php'>Sign up</a> to gain all this exclusive content!</p>
	</div>
</form>";





?>
