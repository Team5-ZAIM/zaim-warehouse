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

        <div class="row">
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
                $columnNumber = 1;
                $maxColumnNumber = 3;
                foreach ($conn->query($sql) as $row) {
                    if ($columNumber == 1) {
                        echo '<div class = "column">';
                    }
                    
                    $imageSrcFile = '/images/' . $row['Photo_ID'] . '.png';
                    
                    echo '<div class="container">';
                    echo 'Item name: ' . $row['Name']; // Use this only for testing.
                    //echo '<img src=$imageSrcFile alt="Avatar" class="image" style="width:100%">'; // Product image.
                    echo '<div class="middle">';
                    echo '<div class="text">';
                    echo '<button type="button" style="background-color:transparent;border: none">';
                    //echo '<a style="text-decoration:none;color:black" href="Product1_Test.html">Product 1</a></button>'; // Link to product description.
                    echo '</div>';
                    echo '</div></div>';
                    
                    if ($columnNumber == $maxColumnNumber) {
                        echo '</div>';
                        $columnNumber = 1;
                    } else {
                        $columNumber++;
                    }
                }
            ?>
        </div>
		<p> </p>		 
	</body>
</html>

<div class="row"> 
  <div class="column">
      <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 1</a></button>
    </div>
    </div> </div>
    <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 4</a></button>
    </div>
    </div> </div>
    <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 7</a></button>
    </div>
    </div> </div>
  </div>
  <div class="column">
      <div class="container">