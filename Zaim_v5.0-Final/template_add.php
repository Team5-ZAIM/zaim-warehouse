<?php
        $servername = "mysql.clarkson.edu";
        $username = "zaim_tech";
        $password = "z1@m_T3c4";
        $dbname = "ee418_zaim_tech";
        
            
        	$ItemNumber = $_POST['Item Number'];
        	$Name = $_POST['Name'];
        	$Description = $_POST['Description']; 
        	$Quantity = $_POST['Quantity'];
        	$Price = $_POST['Price']; 
        	$Category = $_POST['Category']; 
        	$Photo_ID = $_POST['Photo ID'];
        	$Company_Name = $_POST['Company Name']; 

        	
        if (empty($_POST['add'])){
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Inventory (Item_Number,Name,Descr,Quantity,Price,Category,Photo_ID,Company_Name) VALUES ('$ItemNumber','$Name','$Description','$Quantity','$Price','$Category','$Photo_ID','$Company_Name')"; 
            // $sql = "INSERT INTO User_Accounts (User_ID,Password,User_Email,First_Name, Last_Name, User_Phone_Number) VALUES (\'" . $Username . "\', \'" . $Password . "\', \'" . $User_Email .// "\', \'" . $First_Name . "\', \'" . $Last_Name . "\', \'" $User_Phone_Number . "\');";
             // use exec() because no results are returned
            $conn->exec($sql);
            echo "New Inventory created successfully";
            $cookieTimeout = 60 * 30; // number of seconds 1800
            setcookie("zaim_inventory",$ItemNumber,time()+$cookieTimeout);
            echo $_COOKIE["zaim_inventory"];
            header('Location: inventory.php');
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
         }
         
        $conn = null;
        ?> 