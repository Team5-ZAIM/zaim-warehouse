<?php
$servername = "mysql.clarkson.edu";
$username = "zaim_tech";
$password = "z1@m_T3c4";
$dbname = "ee418_zaim_tech";

/***
 * All of the below MySQL_ commands can be easily
 * translated to MySQLi_ with the additions as commented
 ***/ 
$imgData = file_get_contents($filename);
$size = getimagesize($filename);
mysql_connect("$servername", "$username", "$password");
mysql_select_db ("$dbname");
// mysqli 
// $link = mysqli_connect($servername, $username, $password,$dbname); 
$sql = sprintf("INSERT INTO PicTempTest
    (PicID, image)
    VALUES
    ('%s', '%s')",
    /***
     * For all mysqli_ functions below, the syntax is:
     * mysqli_whartever($link, $functionContents); 
     ***/
    mysql_real_escape_string($size['mime']),
    mysql_real_escape_string($imgData),
    $size[3],
    mysql_real_escape_string($_FILES['userfile']['name'])
    );
mysql_query($sql);

?>