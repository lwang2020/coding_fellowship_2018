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

function Repopulate($info){
	global $Errors;
	if($info=='Name' && isset($_REQUEST['JobApplication']) && sizeof($Errors)>0 && strlen($_REQUEST['NameBlank']) > 0){
		echo "<input type='text' name='NameBlank' value = $_REQUEST[NameBlank] >";
	}
	elseif ($info == 'Name'){
		echo "<input type='text' name='NameBlank'>";
	}

	if($info=='Phone' && isset($_REQUEST['JobApplication']) && sizeof($Errors)>0 && strlen($_REQUEST['PhoneBlank']) > 0){
		echo "<input type='text' name='PhoneBlank' value = $_REQUEST[PhoneBlank] >";
	}
	elseif ($info=='Phone'){
		echo "<input type='text' name='PhoneBlank'>";
	}
}

function SubmitApplication($Name, $Phone, $Position){
		$result = dbQuery("
			INSERT INTO JobApplicants(Name, PhoneNumber, Position)
			VALUES('$Name', '$Phone', '$Position')
		")->fetch();
		header("Location: http://localhost:8888/form_success_page.php");
		exit();
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

function SuccessfulMessage($info){
	$result = dbQuery("
		SELECT Name, PhoneNumber, Position
		FROM JobApplicants
		WHERE id=(SELECT MAX(id) FROM JobApplicants)
		")->fetch();
	return $result;
}
