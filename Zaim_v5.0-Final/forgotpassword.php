<?php
    /*
    if(!empty($success_message)) {
        echo $success_message;
    }
    
	if(!empty($error_message)) {
	    echo $error_message;
	}
	*/

    $servername = "mysql.clarkson.edu";
    $username = "zaim_tech";
    $password = "z1@m_T3c4";
    $dbname = "ee418_zaim_tech";
    
    $uname = $POST['user-login-name'];
    $email = $POST['user-email'];
    
    if (!empty($_POST['user-login-name']) && !empty($_POST['user-email'])) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            foreach ($conn->query("SELECT User_Email from User_Accounts WHERE Username = '$uname'") as $row) {
                $correctEmail = $row['User_Email'];
            }
            echo $correctEmail.'\n';
            if ($email == $correctEmail) {
                foreach ($conn->query("SELECT Password from User_Accounts WHERE Username = '$uname'") as $row) {
                    $correctPassword = $row['Password'];
                }
                //echo $conn->query("SELECT Password FROM User_Accounts WHERE Username = '$uname'"); // Used for testing, NOT production code.
                echo $correctPassword;
                // Production code will reset the password and send the user an email with instructions on how to change it.
            } else {
                echo "User email is incorrect.";
            }
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
?>