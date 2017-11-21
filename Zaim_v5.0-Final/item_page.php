<!DOCTYPE html>
<!-- account_page.html-->
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="shortcut icon" href="ZAIM.ico">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0, maximum-scale=1">
    </head>

    <body>
        
        <?php
        session_start();
        $ID=$_SESSION['item_ID'];
        echo $ID;
        
        ?>
        
    </body>
</html>