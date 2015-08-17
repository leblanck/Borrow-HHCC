<?php
//open connection
$con = mysql_connect("localhost","root","root");
if (!$con){
	die('Could not connect: ' . mysql_error());
	}
	
mysql_select_db("loan_db", $con);
//end opening connection

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$device = $_POST['device'];
$loanDate = $_POST['loanDate'];
$dueDate = $_POST['dueDate'];
$notes = $_POST['notes'];


//if(empty($firstName) || empty($lastName) || empty($device) || empty($loanDate) || empty($dueDate)){
//	echo '<script type="text/javascript"> alert("One or more fields were left empty! Please try again!");</script>';
//}else{
	$sql="INSERT INTO loans (firstName, lastName, device, loanDate, dueDate, notes)
	VALUES
	('$_POST[firstName]','$_POST[lastName]','$_POST[device]','$_POST[loanDate]','$_POST[dueDate]','$_POST[notes]')";
		if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
		}	
	echo '<script type="text/javascript"> alert("1 record has been added!"); window.location.href = "new_loan.html";</script>';
	//}


//close connection
mysql_close($con);
?>