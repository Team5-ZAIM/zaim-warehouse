<!DOCTYPE html>
<!-- inventory_table.html-->
<html>
	<head>
		<link rel="stylesheet" href="userformstylesheet.css">
		<link rel="shortcut icon" href="ZAIM.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>
    <body>
        <title>Inventory Table</title>
        <iframe src="navbar.html" width="100%" frameBorder="0"></iframe>

        <!-- <table cellspacing="0" cellpadding="0" border="0" width="925">
            <tr>
                <td>
            		<table cellspacing="0" cellpadding="1" border="1" width="1000" >
        	    	    <tr style="color:white;background-color:grey">
        	    	        <th>Item Number</th>
        	    	        <th>Product Name</th>
        	    	        <th>Description</th>
        		            <th>Quantity</th>
        		            <th>Price</th>
        		            <th>Category</th>
        		            <th>Photo</th>
        	            </tr>
        	        </table>
                </td>
            </tr> -->
<!--            <tr>
                <td> -->
        			<div style="width:auto; height:auto; overflow:auto;">
        			    <table cellspacing="0" cellpadding="1" border="1" width="1000" >
            	    	    <thead>
                	    	    <tr style="color:white;background-color:grey">
                	    	        <th>Item Number</th>
                	    	        <th>Product Name</th>
                	    	        <th>Description</th>
                		            <th>Quantity</th>
                		            <th>Price</th>
                		            <th>Category</th>
                		            <th>Photo</th>
                	            </tr>
            	            </thead>
            	            <tbody>
                                <?php
                                    $servername = "mysql.clarkson.edu";
                                    $username = "zaim_tech";
                                    $password = "z1@m_T3c4";
                                    $dbname = "ee418_zaim_tech";
    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    // set the PDO error mode to exception
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    
                                    $sortBy = 'Name'; // This will be defined by a dropdown menu later on.
                                    $sql = 'SELECT * FROM Inventory ORDER BY ' . $sortBy . ';';
                                    foreach ($conn->query($sql) as $row) {
                                        echo '<tr style="color:black;background-color:white">';
                                        echo '<td>' . $row['Item_number'] . '</td>';
                                        echo '<td>' . $row['Name'] . '</td>';
                                        echo '<td>' . $row['Descr'] . '</td>';
                                        echo '<td>' . $row['Quantity'] . '</td>';
                                        echo '<td>' . $row['Price'] . '</td>';
                                        echo '<td>' . $row['Category'] . '</td>';
                                        echo '<td>' . $row['Photo_ID'] . '</td>';
                                        echo '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
        		    </div>
<!--        		</td>
        	</tr>
        </table> -->
		<p> </p>		 
	</body>
</html>