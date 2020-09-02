<html>

<body background="blue-brick-wall-chair-1282315.jpg">

    <table width=850; border="5" align="center">
    <caption><h1>CUSTOMER DETAILS</h1></caption>
        <tr>
            <th>CID</th>
            <th>CNAME</th>
            <th>CADDRESS</th>
			<th>CPHONE</th>
			<th>CEMAIL</th>
			<th>REGDATE</th>
			<th>SSN</th>
            
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','FURNITURE');
            $Query = "SELECT * FROM customer";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $CID = $Datarows['CID'];
                $CNAME = $Datarows['CNAME'];
                $CADDRESS = $Datarows['CADDRESS'];
				$CPHONE = $Datarows['CPHONE'];
				$CEMAIL = $Datarows['CEMAIL'];
				$REGDATE = $Datarows['REGDATE'];
				$SSN = $Datarows['SSN'];
				
                
            
                
            ?>
        <tr>
        <td><?php echo $CID; ?></td>
        <td><?php echo $CNAME; ?></td>
        <td><?php echo $CADDRESS; ?></td>
        <td><?php echo $CPHONE; ?></td> 
        <td><?php echo $CEMAIL; ?></td>
        <td><?php echo $REGDATE; ?></td>
        <td><?php echo $SSN; ?></td>  		

            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="cus.html">HOME</a></h3>
</body>
</html>