<!-- Navigation bar to be included in all pages using a JavaScript script -->
<!-- The script will tag the current page with id="current" -->
<link rel="stylesheet" href="stylesheetnav.css">
<base target="_parent">
<div>
    <div style="padding-left:16px">
        <h2><a href="index.html" class="toptitle">Zaim Inventory Management System</a></h2>
    </div>
    <div class="topnav">
    	<a href="index.html">Home</a>
        <a href="inventory.html">Inventory</a>
        <!--<a href="about.html">About</a>-->
        <a href="https://sites.google.com/clarkson.edu/zaim/about">About</a>
        <!--<a href="company.html">Company</a>-->
        <?php
            if ( isset($_COOKIE['zaim_user']) ) {
                echo '<div id="login">' . $_COOKIE['zaim_user'] . '</div>';
                echo '<a href="logout.php" id="login">Logout</a>';
            } else {
    	        echo '<a href="login.html" id="login">Login</a>';
    	    }
    	?>
        <!--<a href="test.html">Test</a>-->
    </div>
    <script>
        var parentUrl = (window.location != window.parent.location) ? document.referrer: document.location;
        var url = parentUrl.split("/");
        //document.write(url);
        var navLinks = document.getElementsByClassName("topnav")[0].getElementsByTagName("a");
        var i = 0;
        var currentPage = url[url.length - 1];
        for(i;i<navLinks.length;i++){
            var lb = navLinks[i].href.split("/");
            if(lb[lb.length-1] == currentPage) {
                navLinks[i].className = "current";
            }
        }
    </script>
</div>