<?php
        $servername = "mysql.clarkson.edu";
        $username = "zaim_tech";
        $password = "z1@m_T3c4";
        $dbname = "ee418_zaim_tech";
        
            
        	$Item_number = $_POST['Item_number'];
        	$Name = $_POST['Name'];
        	$Description = $_POST['Description']; 
        	$Quantity = $_POST['Quantity'];
        	$Price = $_POST['Price']; 
        	$Category = $_POST['Category']; 
        	$Photo_ID = $_POST['Photo_ID'];
        	$Company_Name = $_POST['Company_Name']; 

        	
        if (empty($_POST['edit'])){
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE Inventory SET Name= '$Name', Descr= '$Description', Quantity= '$Quantity', Price= '$Price', Category='$Category', Photo_ID= '$Photo_ID', Company_Name='$Company_Name' WHERE Item_number LIKE '$Item_number'";
             // use exec() because no results are returned
            $conn->exec($sql);
            echo "Updated Inventory created successfully";
            header('Location: inventory.html');
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
         }

        $conn = null;
        ?> 