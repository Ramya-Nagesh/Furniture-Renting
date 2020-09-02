<html> 
<style>
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body background="190220.jpg">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "FURNITURE";
 $con = new mysqli($servername,$username,$password,$dbname);
if($con->connect_error) {
	die("connection failed: " . $con->connect_error);
} 
	
	$SSN=$_POST["SSN"]; 
	$DNAME=$_POST["DNAME"]; 
	$DADDRESS=$_POST["DADDRESS"]; 
	$DPHONE=$_POST["DPHONE"];
    $RELATIONSHIP=$_POST["RELATIONSHIP"]; 	
	
	
		$sql="UPDATE dependent SET DNAME='$DNAME',DADDRESS='$DADDRESS',DPHONE='$DPHONE',RELATIONSHIP='$RELATIONSHIP' WHERE SSN='$SSN' "; 
	if($con->query($sql) == TRUE){ 
		echo " record UPDATED successfully";
	}else{ 
		echo "Error: " . $sql . "<br>" . $con->error;
	}
$con->close();
?>
 <form action="depen.html" method="POST">
<input type="SUBMIT"  class="button" value="Return"/> 
</body>
</html>
