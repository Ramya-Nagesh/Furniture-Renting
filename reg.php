<html>
<head>
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


body {
    color:black;
    background-image: url("xmas.jpg"), url("download (1).jpg");
    background-repeat: no-repeat, repeat;
    background-color: #cccccc;
    background-position: right top; 
}
</style>
</head>  
<body> 
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
	$CNAME=$_POST["CNAME"]; 
	$CADDRESS=$_POST["CADDRESS"]; 
	$CPHONE=$_POST["CPHONE"]; 
	$CEMAIL=$_POST["CEMAIL"];
	
	
		$sql="insert into CUSTOMER(CID,CNAME,CADDRESS,CPHONE,CEMAIL) values('$CID','$CNAME','$CADDRESS','$CPHONE','$CEMAIL')"; 
	if($con->query($sql) == TRUE){ 
		echo "successfully registered";
	}else{ 
		echo "Error: " . $sql . "<br>" . $con->error;
	}
$con->close();
?>
 <form action="welcome.html" method="POST">
<input type="SUBMIT" class="button" value="retun"/> 
</body>
</html>
