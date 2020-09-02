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
	$CID=$_POST["CID"]; 
	$SSN=$_POST["SSN"]; 
	
	
		$sql="UPDATE CUSTOMER SET SSN='$SSN' WHERE CID='$CID' "; 
	if($con->query($sql) == TRUE){ 
		echo " record UPDATED successfully";
	}else{ 
		echo "Error: " . $sql . "<br>" . $con->error;
	}
$con->close();
?>
 <form action="cus.html" method="POST">
<input type="SUBMIT" class="button" value="RETURN"/>
</body>
</html>
