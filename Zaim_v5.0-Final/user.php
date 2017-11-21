
<?php
$servername = "mysql.clarkson.edu";
$username = "zaim_tech";
$password = "z1@m_T3c4";
$dbname = "ee418_zaim_tech";

    
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$User_Email = $_POST['email']; 
	$First_Name = $_POST['fname'];
	$Last_Name = $_POST['lname']; 
	$User_Email = $_POST['email']; 
	$User_Phone_Number = $_POST['phone']; 
	$Company_Name = $_POST['companyname'];	

if (empty($_POST['id02'])){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO User_Accounts (username,password,First_Name,Last_Name,User_Email,User_Phone_Number,Company_Name) VALUES ('$Username','$Password','$First_Name','$Last_Name','$User_Email','$User_Phone_Number','$Company_Name')"; 
    // $sql = "INSERT INTO User_Accounts (User_ID,Password,User_Email,First_Name, Last_Name, User_Phone_Number) VALUES (\'" . $Username . "\', \'" . $Password . "\', \'" . $User_Email .// "\', \'" . $First_Name . "\', \'" . $Last_Name . "\', \'" $User_Phone_Number . "\');";
     // use exec() because no results are returned
    $conn->exec($sql);
    echo "New Account created successfully";
    
    
    $cookieTimeout = 60 * 30; // number of seconds 1800
    setcookie("zaim_user",$Username,time()+$cookieTimeout);
    echo $_COOKIE["zaim_user"];
    header('Location: account_page.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
 }
 
$conn = null;
?> 


