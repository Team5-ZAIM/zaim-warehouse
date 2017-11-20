<!DOCTYPE html>
<!-- account_page.php-->
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="shortcut icon" href="ZAIM.ico">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0, maximum-scale=1">
    </head>

    <body>
        <title>Accounts</title>
        <iframe src="navbar.html" width="100%" frameBorder="0"></iframe>
        
                   <div style="width:auto; height:auto; overflow:auto;">
                                <?php
                                    $servername = "mysql.clarkson.edu";
                                    $username = "zaim_tech";
                                    $password = "z1@m_T3c4";
                                    $dbname = "ee418_zaim_tech";
    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    // set the PDO error mode to exception
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    
                                     $currentUser = $_COOKIE["zaim_user"];
                                    //echo $_COOKIE["zaim_user"];
                                    $sql = 'SELECT * FROM User_Accounts WHERE Username="' . $currentUser . '";';
                                    echo "<style>";
                                        echo "th {color:white;background-color:transparent}";
                                        echo "td {color:black;background-color:white}";
                                    echo "</style>";
                                    echo '<table cellspacing="0" cellpadding="1" border="1" width="1000">';
                                    foreach ($conn->query($sql) as $row) {
                                        echo '<tr>';
                                            echo '<th scope="row">Username:</th>';
                                            echo '<td>' . $row['Username'] . '</td>';
                                        echo '</tr>';
                                        echo '<tr>';
                                            echo '<th scope="row">First Name:</th>';
                                            echo '<td>' . $row['First_Name'] . '</td>';
                                        echo '</tr>';
                                        echo '<tr>';
                                            echo '<th>Last Name:</th>';
                                            echo '<td>' . $row['Last_Name'] . '</td>';
                                        echo '</tr>';
                                        echo '<tr>';
                                            echo '<th>Email:</th>';
                                            echo '<td>' . $row['User_Email'] . '</td>';
                                        echo '</tr>';
                                        echo '<tr>';
                                            echo '<th scope="row">Company:</th>';
                                            echo '<td>' . $row['Company_Name'] . '</td>';
                                        echo '</tr>';
                                    }
                                    echo '</table>';
                                ?>
        		    </div>
        
	</body>
</html>

