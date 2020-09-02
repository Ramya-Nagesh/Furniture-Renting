<html>

<body background="blue-brick-wall-chair-1282315.jpg">

    <table width=850; border="5" align="center">
    <caption><h1>DEPENDENT DETAILS</h1></caption>
        <tr>
            <th>SSN</th>
            <th>DNAME</th>
            <th>DADDRESS</th>
			<th>DPHONE</th>
			<th>RELATIONSHIP</th>
			
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','FURNITURE');
            $Query = "SELECT * FROM DEPENDENT";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $SSN = $Datarows['SSN'];
                $DNAME = $Datarows['DNAME'];
                $DADDRESS = $Datarows['DADDRESS'];
				$DPHONE = $Datarows['DPHONE'];
				$RELATIONSHIP = $Datarows['RELATIONSHIP'];
				
				
                
            
                
            ?>
        <tr>
        <td><?php echo $SSN; ?></td>
        <td><?php echo $DNAME; ?></td>
        <td><?php echo $DADDRESS; ?></td>
        <td><?php echo $DPHONE; ?></td> 
        <td><?php echo $RELATIONSHIP; ?></td>
       		

            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="depen.html">HOME</a></h3>
</body>
</html>