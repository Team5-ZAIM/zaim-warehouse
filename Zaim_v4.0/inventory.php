<!DOCTYPE html>
<!-- inventory.html-->
<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="shortcut icon" href="ZAIM.ico">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0, maximum-scale=1">
        <title>Inventory</title>
        

  
<style> 

body {
    font-family: "Lato", sans-serif;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	}

.sidenav, .sidenav ul {
    margin:0;
    padding:0;
    list-style:none;
}
.sidenav li {
    position:relative;
    z-index:1;

}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    z-index: 9998;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.ui-menu { width: 150px; }

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-image: url('icon-search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}

.wrapper {
            text-align: center;
        }

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('icon-search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
    width: 75%;
}

.container {
    position: relative;
    width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: 1s ease;
  backface-visibility: hidden;
}

.middle {
  transition: 1s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 14px;
  padding: 16px 32px;
  border-radius: 12px;
}
* {
    box-sizing: border-box;
}
.column {
    float: left;
    width: 33.33333333%;
    padding: 10px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}
@media (max-width: 800px) {
    .column {
        width: 50%;
    }
}
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}

    </style>
</head>
<body>
    <iframe src="navbar.html" width="100%" frameBorder="0"></iframe>
<!--<nav>--
<!--
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a><li>
    <li class="sub"><a href="#">Inventory</a>
        <!--<ul>-->
        <!--<div class="dropdown">
  
	    <button class="dropbtn"><a href="#">Category</a></button>
        -->
        <!--
        <li class="sub-sub"><a href="#">Category</a>
		    <ul>
		        <div class=wrapper>
		        <select name="dropdown">
		        <!--<div class="dropdown-content">-->
		        <!--
		        <option value="options">--Please Select--</option>
			    <option><li><a href="#">Appliances</a></li></option>
			    <option><li><a href="#">Cameras</a></li></option>
	            <option><li><a href="#">Car Electronics</a></li></option>
	            <option><li><a href="#">Computers</a></li></option>
	            <option><li><a href="#">Consoles</a></li></option>
	            <option><li><a href="#">Mobile</a></li></option>
	            <option><li><a href="#">Printers</a></li></option>
	            <option><li><a href="#">TVs</a></li></option>
	            <!--</div>-->
	            <!--
	            </select>
	            </div>
	        </ul>
        </li>
        -->
        <!--</ul>-->

<!--        
	</li>
    <li><a href="login.html">Login</a></li>
    <ul>
		<li><input type="radio" name="appliances" value="appliancename" checked>Name (A-Z)<br><li>
		<li><input type="radio" name="appliances" value="priceHL" checked>Price (High to Low)<br><li>
		<li><input type="radio" name="appliances" value="priceLH" checked>Price (Low to High)<br><li>
    </ul>
</div>
-->
<!--</nav>-->
<!--
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>    
-->
<!-- end of side nav menu -->

<!--
<form id="itemMenu" action="inventory.php" method="post">
    <div class=wrapper>
        <input type="text" name="search" placeholder="Search">
        <p></p>
        <select name="sortMenu">
            <option value="Select">--Select--</option>
            <option value="name">Name (A-Z)</option>
            <option value="priceHL">Price (High to Low)</option>
            <option value="priceLH">Price (Low to High)</option>
        </select>
       
       <select name="categoryMenu">
            <option value="Category">--Category--</option>
            <option value="Appliances">Appliances</option>
            <option value="Cameras">Camera</option>
            <option value="Car">Car</option>
            <option value="Computers">Computers</option>
            <option value="Consoles">Consoles</option>
            <option value="Mobile">Mobile</option>
            <option value="Printers">Printers</option>
            <option value="TVs">TVs</option>
        </select>
-->       
       <!--
        <ul id="menu"> 
            <li><div>Appliances</div></li> 
            <li><div>Cameras</div></li>
                <ul><li><div>DSLR</div></li></ul>
            <li><div>Car Electronics</div><ul><div>Radio</div></ul></li> 
            <li><div>Computers</div></li> 
            <li><div>Consoles</div></li> 
            <li><div>Mobile</div></li> 
            <li><div>Mobile</div></li> 
            <li><div>Printers</div></li> 
            <li><div>TVs</div></li> 
        </ul> 
        -->

        
        <!-- ------------------------- -->
        
    
    <!-- <input type="submit" name="search" value="Search"></input> -->
    <div style="background-color:gray;border-radius:5px;color:white;text-align:center;text-shadow: 3px 2px black;">
        <a href="inventory.html" style="text-decoration:none;color:white"><b>New Search</b></a>
    </div>
    <!--<div class="container">-->
<!--    <input type="submit" name="add" value="Add"><a style="text-decoration:none;color:black"href="template_add.html"></a></input>
    <!--</div>-->
<!--    </div>
</form>
-->

<div style="width:auto; height:auto; overflow:auto;">
    <table cellspacing="0" cellpadding="1" border="1" style="width:100%" >
	    <thead>
    	    <tr style="color:white;background-color:grey">
    	        <th>Item Number</th>
    	        <th>Product Name</th>
    	        <th>Description</th>
	            <th>Quantity</th>
	            <th>Price</th>
	            <th>Category</th>
	            <th>Photo</th>
	            <th>Company</th>
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
                
                /*
                if(isSet($_POST['search'])) {
                    $searchTerm = '"'. $_POST['search'] . '" IN (Name, Descr, Category) AND ';
                } else {
                    $searchTerm = '"Dell"';  // If nothing is entered in the search box then default to having this be empty.
                }
                */
                //echo $searchTerm;
                
                // These come from the dropdown menus.
                //$category = $_POST['categoryMenu'];
                //$sortBy = $_POST['sortMenu'];
                
                // If $sortBy = 'Price (Low to High)' then ORDER BY Price DESC;
                // Else If $sortBy = 'Price (High to Low)' then ORDER BY Price;
                // Else ORDER BY Name; // Includes 'Name (A-Z)'
                /*
                $sql = 'SELECT * FROM Inventory WHERE ' . $searchTerm . ';';//. $category . ' IN Category';
                if (isSet($_POST['sortMenu']) && $sortBy == 'priceLH') {
                    $sql .= ' ORDER BY Price;';
                } else if (isSet($_POST['sortMenu']) && $sortBy == 'priceHL') {
                    $sql .= ' ORDER BY Price DESC;';
                } else {
                    $sql .= ' ORDER BY Name;';
                }
                
                $sql_prepared = $dbh->prepare($sql);
                */
                
                //SELECT * FROM Inventory WHERE ' . $searchTerm . ' IN (Name, Descr, Category);
                
                //$sql = $dbh->prepare('SELECT * FROM Inventory ); DELETE FROM Inventory WHERE Item_number = "12355"; '); // SQL injection test
                //$searchTerm = $_POST['searchBar'];
                //echo $searchTerm;
                //$sql = 'SELECT * FROM Inventory WHERE "' . $searchTerm . '" IN (Name, Descr, Category);';
                //$query = 'SELECT * FROM Inventory WHERE "Headphones" IN (Name, Descr, Category);';
                //echo $sql;
                //$stmt = $conn -> prepare($query);
                //$result ->
                
                // Example query: 'SELECT * FROM Inventory WHERE Category="Electronics" AND Name LIKE 'KEYBOARD' ORDER BY Item_number;'
                
                $search = $_POST['search']; // This comes from the search box.
                //echo $search . "\n";
                $category = $_POST['categoryMenu'];
                //echo $category . "\n";
                $sortBy = $_POST['sortMenu'];
                //isSet($_POST['sortMenu']) &&
                if ( $sortBy == 'priceLH') {
                    $orderBy = 'Price';
                    //echo "isSet Price\n";
                } else if (sortBy == 'priceHL') {
                    $orderBy = 'Price DESC';
                    //echo "isSet Price DESC\n";
                    //echo $orderBy;
                } else {
                    $orderBy = 'Name';
                    //echo "isSet Name\n";
                }
                
                //echo $orderBy;
                
                /*
                $query = $conn->prepare("SELECT * FROM Inventory WHERE Category='%$category%' AND Name LIKE '%$search%' ORDER BY '%$orderBy%';");
                $query->bindValue(1, "%$category%", PDO::PARAM_STR);
                $query->bindValue(2, "%$search%", PDO::PARAM_STR);
                $query->bindValue(3, "%$orderBy%", PDO::PARAM_STR);
                */
                
                /*
                $query = $conn->prepare("SELECT * FROM Inventory WHERE Category='%$category%' AND Name LIKE '%$search%' ORDER BY '%$orderBy%';");
                $query->bindValue("%$category%", $category, PDO::PARAM_STR);
                $query->bindValue("%$search%", $search, PDO::PARAM_STR);
                $query->bindValue("%$orderBy%", $orderBy, PDO::PARAM_STR);
                */
                
                //$query = $conn->prepare("SELECT * FROM Inventory WHERE Category = ? AND Name LIKE ? ORDER BY ?");
                if ($category != 'Category') {
                    if ($orderBy == 'Price DESC') {
                        $query = $conn->prepare("SELECT * FROM Inventory WHERE Category = ? ORDER BY Price DESC");
                        $query->bindValue(1, $category, PDO::PARAM_STR);
                    } else {
                        $query = $conn->prepare("SELECT * FROM Inventory WHERE Category = ? ORDER BY ?");
                        $query->bindValue(1, $category, PDO::PARAM_STR);
                        $query->bindValue(2, $orderBy, PDO::PARAM_STR);
                    }
                } else {
                    if ($orderBy == 'Price DESC') {
                        $query = $conn->prepare("SELECT * FROM Inventory WHERE Name LIKE ? ORDER BY Price DESC");
                        $query->bindValue(1, "%$search%", PDO::PARAM_STR);
                    } else {
                        $query = $conn->prepare("SELECT * FROM Inventory WHERE Name LIKE ? ORDER BY ?");
                        $query->bindValue(1, "%$search%", PDO::PARAM_STR);
                        $query->bindValue(2, $orderBy, PDO::PARAM_STR);
                    }
                }
                
                /*
                $query->bindValue(1, $category, PDO::PARAM_STR);
                $query->bindValue(2, "%$search%", PDO::PARAM_STR);
                $query->bindValue(3, $orderBy, PDO::PARAM_STR);
                */
                
                $query->execute();
                
                /*
                if (!$query->rowCount() == 0) {
                    while ($results = $query->fetch()) {
                        echo $results['Name'];
                        echo $results['Descr'];
                    }
                } else {
                    echo 'No results';
                }
                */
                
                if (!$query->rowCount() == 0) {
                    while ($results = $query->fetch()) {
                        echo '<tr style="color:black;background-color:#F1F1F1">';
                        echo '<td>' . $results['Item_number'] . '</td>';
                        echo '<td><a href="item_page.php">' . $results['Name'] . '</a></td>';
                        echo '<td>' . $results['Descr'] . '</td>';
                        echo '<td>' . $results['Quantity'] . '</td>';
                        echo '<td>' . $results['Price'] . '</td>';
                        echo '<td>' . $results['Category'] . '</td>';
                        //echo '<td>' . $results['Photo_ID'] . '</td>';
                        echo '<td><img src="Inventory_Pictures/' . $results['Photo_ID'] . '.jpg" alt="' . $results['Photo_ID'] . '" height="42" width="42"></td>';
                        echo '<td>' . $results['Company_Name'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo 'No results found';
                }
                
                /*
                foreach ($stmt->execute($query) as $row) {
                    echo '<tr style="color:black;background-color:white">';
                    echo '<td>' . $row['Item_number'] . '</td>';
                    echo '<td>' . $row['Name'] . '</td>';
                    echo '<td>' . $row['Descr'] . '</td>';
                    echo '<td>' . $row['Quantity'] . '</td>';
                    echo '<td>' . $row['Price'] . '</td>';
                    echo '<td>' . $row['Category'] . '</td>';
                    echo '<td>' . $row['Photo_ID'] . '</td>';
                    echo '<td>' . $row['Company_Name'] . '</td>';
                    echo '</tr>';
                }
                */		    
                //mysql_close($link);
            ?>
        </tbody>
    </table>
</div>

<!--
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
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 2</a></button>
    </div>
    </div> </div>
    <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 5</a></button>
    </div>
    </div> </div>
    <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 8</a></button>
    </div>
    </div> </div>
  </div>
  <div class="column">
      <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 3</a></button>
    </div>
    </div> </div>
    <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 6</a></button>
    </div>
    </div> </div>
    <div class="container">
    <img src="ZAiM Technologies Logo 2.png" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    <div class="text">
        <button type="button" style="background-color:transparent;border: none">
        <a style="text-decoration:none;color:black" href="Product1_Test.html">Product 9</a></button>
    </div>
    </div> </div>
  </div>
</div>
-->
<!-- </div> -->
<!-- old picture style grid -->
<!-- 
<style>
* {
    box-sizing: border-box;
}
.column {
    float: left;
    width: 25%;
    padding: 10px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}
@media (max-width: 800px) {
    .column {
        width: 50%;
    }
}
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
-->
<!-- Photo Grid -->
<!--
<div class="row"> 
  <div class="column">
    <img src="ZAiM Technologies Logo 2.png" style="width:100%">
    <img src="ZAiM Technologies Logo 2.png" style="width:100%">
    <img src="ZAiM Technologies Logo 2.png" style="width:100%">
    <img src="ZAiM Technologies Logo 2.png" style="width:100%">
  </div>
    <div class="column">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
    </div>
        <div class="column">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
        <img src="ZAiM Technologies Logo 2.png" style="width:100%">
    </div>
</div>
-->
    </body>
</html>