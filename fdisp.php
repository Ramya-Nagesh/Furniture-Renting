<html>

<body background="blue-brick-wall-chair-1282315.jpg">

    <table width=850; border="5" align="center">
    <caption><h1>FURNITURE DETAILS</h1></caption>
        <tr>
            <th>FID</th>
            <th>FNAME</th>
            <th>NO_OF_PIECES</th>
			<th>PRICE</th>
			
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','FURNITURE');
            $Query = "SELECT * FROM fur";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $FID = $Datarows['FID'];
                $FNAME = $Datarows['FNAME'];
                $NO_OF_PIECES = $Datarows['NO_OF_PIECES'];
				$PRICE = $Datarows['PRICE'];
				
                
            
                
            ?>
        <tr>
        <td><?php echo $FID; ?></td>
        <td><?php echo $FNAME; ?></td>
        <td><?php echo $NO_OF_PIECES; ?></td>
        <td><?php echo $PRICE; ?></td> 
 		

            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="admin.html">HOME</a></h3>
</body>
</html>