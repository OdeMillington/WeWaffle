<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="./Images/Favicon/favicon.ico">
    <title>WeWaffle | Login</title>

    <style>
        
    #error {
        font-family: 'Montserrat', sans-serif;
        color:crimson;
        font-weight: bold;
        text-align:center;
    }
    
    </style>

</head>

<body>

    <?php
        unset($_SESSION['animation-played']);
    ?>
    
    <script>
        function showPass() {
          let pass = document.getElementById("password");
          if (pass.type === "password") {
            pass.type = "text";
          } else {
            pass.type = "password";
          }
        }
    </script>
<div class ="login-page">
    <div class="container">
       <div class="info">
        
            <div>
                <p id="companyName">WeWaffle</p>
            </div>

            <div>
                <p id="welcome">Login and Begin Waffling</p>
            </div>

       </div>

        <div class="form-crt">
            <form action="message.php" method="post">
                <div class="items">
                    <div class="uname">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="pass">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">

                        <div class="showPasswordDiv">
                            <label id="showpass" for="showPass">Show Password</label>
                            <input type="checkbox" id="showpass" onclick="showPass()">
                        </div>
     
                    </div>
                    </div>

                    <div class="bottom">
                        
                        <div class="error">
                            <?php 
                            
                            if (isset($_SESSION['error'])) {
                                echo "<p id='error'>Invalid Username/Password <p>";
                                session_unset();
                            }
                            
                            ?>
                            
                        </div>

                        <input type="submit" value="Login">
                    </div>

            </form>
        </div>
    </div>
</div>
</body>

</html>