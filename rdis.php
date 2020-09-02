<html>

<body background="blue-brick-wall-chair-1282315.jpg">

    <table width=850; border="5" align="center">
    <caption><h1>RENT DETAILS</h1></caption>
        <tr>
            <th>CID</th>
            <th>FID</th>
            <th>RETURN_DATE</th>
			
			
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','FURNITURE');
            $Query = "SELECT * FROM RENTS";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $CID = $Datarows['CID'];
                $FID = $Datarows['FID'];
                $RETURN_DATE = $Datarows['RETURN_DATE'];
				
				
                
            
                
            ?>
        <tr>
        <td><?php echo $CID; ?></td>
        <td><?php echo $FID; ?></td>
        <td><?php echo $RETURN_DATE; ?></td>
     
 		

            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="ren.html">HOME</a></h3>
</body>
</html>