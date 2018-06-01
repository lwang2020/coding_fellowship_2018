<?php


function ValidateFormField(){
	global $Errors;
	if ((trim($_REQUEST['NameBlank']) == '') or (strlen($_REQUEST['NameBlank']) < 3)){
		$Errors['NameBlank']= "required";
	}
	if ((trim($_REQUEST['PhoneBlank']) == '') or (strlen($_REQUEST['PhoneBlank']) < 10) or (strlen($_REQUEST['PhoneBlank']) > 15)){
		$Errors['PhoneBlank']= "required";
	}
}

function SubmitApplication($Name, $Phone, $Position){
		$result = dbQuery("
			INSERT INTO JobApplicants(Name, PhoneNumber, Position)
			VALUES('$Name', '$Phone', '$Position')
		")->fetch();
		die("
			<h1> $Name just applied </h1>
			<p> They applied for the $Position position. You can reach them at $Phone </p>
			");
}


function TextField(){
	global $Errors;
		if(isset($_REQUEST['JobApplication'])){
			if ((trim($_REQUEST['NameBlank']) == '') or (strlen($_REQUEST['NameBlank']) < 3)){
				$Errors['NameBlank']= "required";
			}
			if ((trim($_REQUEST['PhoneBlank']) == '') or (strlen($_REQUEST['PhoneBlank']) < 10) or (strlen($_REQUEST['PhoneBlank']) > 15)){
				$Errors['PhoneBlank']= "required";
			}
		}
}

function RepopulateName(){
	global $Errors;
	if (isset($_REQUEST['JobApplication']) && sizeof($Errors) > 0){
		echo "<input type='text' name='NameBlank' value = $_REQUEST[NameBlank] >";
	}
	else{
		echo "<input type='text' name='NameBlank'>";
	}
}

function RepopulatePhone(){
	global $Errors;
	if (isset($_REQUEST['JobApplication']) && sizeof($Errors) > 0){
		echo "<input type='text' name='PhoneBlank' value = $_REQUEST[PhoneBlank] >";
	}
	else{
		echo "<input type='text' name='PhoneBlank'>";
	}
}
