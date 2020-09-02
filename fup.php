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
	$FID=$_POST["FID"]; 
	$FNAME=$_POST["FNAME"]; 
	$NO_OF_PIECES=$_POST["NO_OF_PIECES"]; 
	$PRICE=$_POST["PRICE"];  
	
	
		$sql="UPDATE fur SET FNAME='$FNAME',NO_OF_PIECES='$NO_OF_PIECES',PRICE='$PRICE' WHERE FID='$FID' "; 
	if($con->query($sql) == TRUE){ 
		echo " record UPDATED successfully";
	}else{ 
		echo "Error: " . $sql . "<br>" . $con->error;
	}
$con->close();
?>
 <form action="admin.html" method="POST">
<input type="submit" class="button" value="RETURN"/> 
</body>
</html>
