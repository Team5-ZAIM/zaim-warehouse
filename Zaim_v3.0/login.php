<?php
$servername = "mysql.clarkson.edu";
$username = "zaim_tech";
$password = "z1@m_T3c4";
$dbname = "ee418_zaim_tech";

if (empty($_POST['id01'])){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$Username = $_POST['uname']
	$Password = $_POST['psw'];
	sql = "INSERT INTO User_Accounts (uname,psw,email,fname,lname,phone,companyname) VALUES ('$Username','$Password','$User_Email','$First_Name','$Last_Name','$User_Phone_Number','$Company_Name')"; 
	$conn->exec($sql);
	echo "YOUR REGISTRATION IS COMPLETED..."; 
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
 }
$conn = null;
?> 




