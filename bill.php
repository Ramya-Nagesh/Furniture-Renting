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
<body background="blue-brick-wall-chair-1282315.jpg">
<table width=850; border="5" align="center">
    <caption><h1>BILL DETAILS</h1></caption>
        <tr>
            <th>CID</th>
            <th>CNAME</th>
            <th>AMOUNT</th>
			
        </tr>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'FURNITURE')or die("unable to select database:".mysqli_error());
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$n=$_POST['CID'];
if($n!="")
{
$result=mysqli_query($con,"CALL GetBill('$n')") or die("query fail");
while($Datarows=mysqli_fetch_array($result))
{
	$CID = $Datarows[0];
    $CNAME = $Datarows[1];
    $AMT = $Datarows[2];

	


}
}
else
{
echo"one of the fields is empty";
}
}
else
{
echo"invalid form submission";
}
mysqli_close($con);
 ?>
 <tr>
        <td><?php echo $CID; ?></td>
        <td><?php echo $CNAME; ?></td>
        <td><?php echo $AMT; ?></td>
    </tr>
</table>
 <form action="welcome.html" method="POST">
<input type="SUBMIT" class="button" value="RETURN"/> 
</body>
</html>