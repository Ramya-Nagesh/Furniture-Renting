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
// Create connection
$con = mysqli_connect("localhost","root","");
//$con=new mysqli("localhost","root","","FURNITURE");
if(!$con)
{ 
die("could not connect".mysqli_error());
}
mysqli_select_db($con,"FURNITURE");
$n=$_POST["SSN"];
$var=mysqli_query($con,"select * from employee where SSN='$n' ");
echo "<table border=3>";
echo "<tr>
<th>SSN</th>
<th>ENAME</th>
<th>STARTDATE</th>
<th>EPHONE</th>
<th>SHIFT</th>
<th>SALARY</th>
<th>SRID</th>
</tr>";
while($arr=mysqli_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
<td>$arr[4]</td>
<td>$arr[5]</td>
<td>$arr[6]</td>
</tr>";
}
echo "</table>";
mysqli_free_result($var);
mysqli_close($con);
?>

<form action="emp.html" method="POST">
<input type="SUBMIT" class="button" value="Return"/>
</form>
</body>
</html>