<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT User_ID FROM User_Accounts WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<DOCTYPE html>
<html>
<!-- login.html page -->
    <head>
        <link rel="stylesheet" href="stylesheet.css">
		<link rel="shortcut icon" href="ZAIM.ico">
    </head>
    <style>
    
    body {
    font-family: "Lato", sans-serif;
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
    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
        
    
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            position: relative;
            top: 75%;
            border-radius:15px;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        .wrapper {
            text-align: center;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        
        .container {
            padding: 16px;
        }
        
        span.psw {
            float: right;
            padding-top: 16px;
        }
        
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }
        
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        
        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }
            
        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
               display: block;
               float: none;
            }
            .cancelbtn {
               width: 100%;
            }
            
        }
            
            /* The message box is shown when the user clicks on the password field */
            #message {
                display:none;
                background: #f1f1f1;
                color: #000;
                position: relative;
                padding: 20px;
                margin-top: 10px;
            }
            
            #message p {
                padding: 10px 35px;
                font-size: 18px;
            }
            
            /* Add a green text color and a checkmark when the requirements are right */
            .valid {
                color: green;
            }

            .valid:before {
                position: relative;
                left: -35px;
                content: "<-;
            }
            
            /* Add a red text color and an "x" when the requirements are wrong */
            .invalid {
                color: red;
            }
            
            .invalid:before {
                position: relative;
                left: -35px;
                content: "X";
            }
        
        </style>
            <body>
                <title>Login</title>
                <iframe src="navbar.html" width="100%" frameBorder="0"></iframe>

                
                <div class="wrapper">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></button>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Create New Account</a></button>
        </div>
        <div id="id01" class="modal">
          <form class="modal-content animate" action="login.php">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="220px-User_icon_2.svg.png" alt="Avatar" class="avatar">
            </div>
        
            <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
        
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
            </div>
              <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw"> <a href="forgotpassword.html">Forgot password?</a></span>
            </div>
            
          </form>
          
        </div>
        
        <div id="id02" class="modal">
          <form class="modal-content animate" action="user.html">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="220px-User_icon_2.svg.png" alt="Avatar" class="avatar">
            </div>
        
            <div class="container">
              <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
        
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    
              <label><b>Repeat Password</b></label>
              <input type="password" placeholder="Renter Password" name="repeat-psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Passwords MUST match. Please Try again!" required>
              
              <button type="submit">Create New Account</button>
              
              <p><font color=black>By creating an account you agree to our <a href="Terms_and_Privacy.html">Terms & Privacy</a>.</font></p>
              
              <!--
              <button type=button onclick="document.getElementById('id01').style.display='block'" class="newaccountbtn">Create New Account</button>
              <button type="submit">Create New Account</button>
              -->
            </div>
            
            <div id="message">
              <h3>Password must contain the following:</h3>
            	<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            	<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            	<p id="number" class="invalid">A <b>number</b></p>
            	<p id="length" class="invalid">Minimum <b>8 characters</b></p>
              <h3>Password must <i>not</i> contain the following:</h3>
                <p id="specialChars" class="invalid">Special characters <b>('$()[]{}=:;')</b></p>
            </div>
              <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
          </form>
        </div>
        
        <script>
        
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        var specialChars = document.getElementById("specialChars")
        
        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }
        
        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

            // When the user starts to type something inside the password field
            myInput.onkeyup = function() {
              // Validate lowercase letters
              var lowerCaseLetters = /[a-z]/g;
              if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
              }
              
              // Validate capital letters
              var upperCaseLetters = /[A-Z]/g;
              if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }
            
              // Validate numbers
              var numbers = /[0-9]/g;
              if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }
              
              // Validate length
              if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
              
              // Check for special characters (parentheses and equals sign) to prevent SQL injection
              var specialChars = /\$\(\)\[\]\{\}\=\:\/g;
              if(myInput.value.match(specialCharacters)) {
                specialChars.classList.remove("valid");
                specialChars.classList.add("invalid");
              } else {
                specialChars.classList.remove("invalid");
                specialChars.classList.add("valid");
              }
            }
          function validate(){

            if(!document.getElementById("psw").value==document.getElementById("repeat-psw").value)alert("Passwords do no match");
            return document.getElementById("psw").value==document.getElementById("repeat-psw").value;
            return false;
        }
        </script>
    </body>
</html>

