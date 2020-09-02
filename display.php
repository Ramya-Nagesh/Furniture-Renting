<html>

<body background="blue-brick-wall-chair-1282315.jpg">

    <table width=850; border="5" align="center">
    <caption><h1>EMPLOYEE DETAILS</h1></caption>
        <tr>
            <th>SSN</th>
            <th>ENAME</th>
            <th>STARTDATE</th>
			<th>EPHONE</th>
			<th>SHIFT</th>
			<th>SALARY</th>
			<th>SRID</th>
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','FURNITURE');
            $Query = "SELECT * FROM employee";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $SSN = $Datarows['SSN'];
                $ENAME = $Datarows['ENAME'];
                $STARTDATE = $Datarows['STARTDATE'];
				$EPHONE = $Datarows['EPHONE'];
				$SHIFT = $Datarows['SHIFT'];
				$SALARY = $Datarows['SALARY'];
				$SRID = $Datarows['SRID'];
				
                
            
                
            ?>
        <tr>
        <td><?php echo $SSN; ?></td>
        <td><?php echo $ENAME; ?></td>
        <td><?php echo $STARTDATE; ?></td>
        <td><?php echo $EPHONE; ?></td> 
        <td><?php echo $SHIFT; ?></td>
        <td><?php echo $SALARY; ?></td>
        <td><?php echo $SRID; ?></td>  		

            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="emp.html">HOME</a></h3>
</body>
</html>