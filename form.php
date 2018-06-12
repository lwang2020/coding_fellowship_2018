<?php
include ('include/include_all.php');


//The errors array that is empty but will be filled if there are any errors
$Errors = array();

//If the "submit" button is pressed...
if(isset($_REQUEST['JobApplication'])){
	ValidateFormField();
	if(sizeof($Errors) == 0){
		SubmitApplication(
				$_REQUEST['NameBlank'],
				$_REQUEST['PhoneBlank'],
				$_REQUEST['Position']
		);
	}
	if(sizeof($Errors) > 0){
		echo "THERE WERE ERRORS";
	}
}

echo "
	<h1> Job Application Form </h1>
	<form action='' method 'post'>
		<table>
		  <tr>
		    <td>
		      Name:
		    </td>
		    <td>";

Repopulate('NameBlank');

echo "
		    </td>
		  </tr>

		  <tr>
		    <td>
		      Phone:
		    </td>
		    <td>";

Repopulate('PhoneBlank');

echo "
		    </td>
		  </tr>
		</table>


		Position:
			<select name='Position'>
		    <option value='Pupper'>Pupper</option>
		    <option value='Yapper'>Yapper</option>
		    <option value='Woofer'>Woofer</option>
		    <option value='Doggo'>Doggo</option>
		    <option value='Boofer'>Boofer</option>
			</select>
		<br/><br/>
		<input type='submit' name='JobApplication' value='Submit your application'/>
	</form>
";


?>
