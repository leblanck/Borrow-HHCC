<?php
//open connection
$con = mysql_connect("localhost","root","root");
if (!$con){
	die('Could not connect: ' . mysql_error());
	}
	
mysql_select_db("loan_db", $con);
//end opening connection	
	
	
	
//set query
$query = "INSERT INTO old_loans select * from loans where loan_ID={$_POST['loan_ID']}";

mysql_query ($query);

if (mysql_affected_rows() == 1){
	echo '<script type="text/javascript"> alert("Loan Removed!");  window.location.href = "view_loan.php";</script>';
}else{
	echo '<script type="text/javascript"> alert("Error"); window.location.href = "view_loan.php";</script>';
}
	
//close connection
mysql_close($con);
?>