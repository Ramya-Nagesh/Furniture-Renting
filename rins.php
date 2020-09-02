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
	$FID=$_POST["FID"]; 
	$RETURN_DATE=$_POST["RETURN_DATE"];
	
		$sql="insert into rents(CID,FID,RETURN_DATE)values('$CID', '$FID','$RETURN_DATE')"; 
	if($con->query($sql) == TRUE){ 
		echo "New record created successfully";
	}else{ 
		echo "Error: " . $sql . "<br>" . $con->error;
	}
$con->close();
?>
 <form action="ren.html" method="POST">
<input type="SUBMIT" class="button" value="RETURN"/> 
</body>
</html>
