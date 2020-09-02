<html>

<body background="blue-brick-wall-chair-1282315.jpg">

    <table width=850; border="5" align="center">
    <caption><h1>SHOWROOM DETAILS</h1></caption>
        <tr>
            <th>SRID</th>
            <th>SRPHONE</th>
			<th>NO_OF_EMP</th>
			<th>MSSN</th>
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','FURNITURE');
            $Query = "SELECT * FROM showroom";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $SRID = $Datarows['SRID'];
                $SRPHONE = $Datarows['SRPHONE'];
                $NO_OF_EMP = $Datarows['NO_OF_EMP'];
				$MSSN = $Datarows['MSSN'];
				
                
            
                
            ?>
        <tr>
        <td><?php echo $SRID; ?></td>
        <td><?php echo $SRPHONE; ?></td>
        <td><?php echo $NO_OF_EMP; ?></td>
        <td><?php echo $MSSN; ?></td> 
       		

            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="show.html">HOME</a></h3>
</body>
</html>