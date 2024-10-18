<?php
session_start();
    if (isset($_SESSION ['userid'])){
        header("Location:./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PhoneZone</title>
    <style>
            * {
                padding: 0;
                margin: 0; 
            }
        body{
                background-image: url('photo/s-lpage.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
        
        .home1{
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            }

            li {
            float: left;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            }

            li a:hover:not(.active) { 
            background-color: hsl(35, 85%, 60%);
            }

            .active {
            background-color:hsl(35, 85%, 52%);
            font-size:18px;
            border-radius:10px;
            margin-right:10px;
            }

            .active:hover{
                background-color:#000;
            }
        
            body { 
                font-family: Arial, sans-serif;
                margin: 0; 
                padding:0;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #333;
            opacity: 0.8;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input, select, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #333;
            color: white;
        }

        button {
            background-color: hsl(35, 85%, 60%);;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: hsl(35, 85%, 52%);;
        }

        #booking-container {
            display: none;
        }
        p a{
            color: hsl(35, 85%, 62%); 
        }
    
        /* logo css */
        .pone{
            display:flex;
            align-items:center;
            text-decoration:none;
            margin-right: 20px;
       }
        .logo1{
            height:60px;
            width:190px;
            margin: 1%;
       }
       .error{
        color: red;
        border: 3px solid hsl(35, 85%, 62%);
        border-radius: 20px;
        font-size: 15px;
        font-family: Arial, sans-serif;
        padding: 7px;
        text-align: center;
        margin-bottom: 20px;
       }
    </style>
</head>
<body>
    <div class="home1">
        <a href="index.php" class="phone"><img src="photo/weblogo.png" alt="phone zone" class="logo1"></a>
    </ul>
        <li style="float:right"><a class="active" href="login.php">Login</a></li>
    </ul><br>
    </div>

    <div class="container">
        <div class="login-container" id="login-container">
            <h2>Register</h2>
            <form action="includes/signup.inc.php" method="post" id="form-container">
                <label for="username">Full Name</label>
                <input type="text" id="fullname" name="fname" required>
                <label for="username">Username</label>
                <input type="text" id="username" name="uid" required>
                <label for="username">Email Address</label>
                <input type="text" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" required>
                <label for="password">Re-Password</label>
                <input type="password" id="password" name="repwd" required>
                <button name="submit" type="submit"><h3>Register<h3></button>
            </form>
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo'<div class ="error">Fill in the all fields</div>';
                        }elseif($_GET["error"] == "invalidUsername"){
                            echo'<div class ="error">Invalid Username !<br>Try another one.</div>';
                        }elseif($_GET["error"] == "invalidEmail"){
                            echo'<div class ="error">Invalid Email !, Try another one.</div>';
                        }elseif($_GET["error"] == "passworddontmatch"){
                            echo'<div class ="error">Do not match password !<br> Re-enter the correct password.</div>';
                        }elseif($_GET["error"] == "usernametaken"){
                            echo'<div class ="error">Username of Email allready used !<br>Try another one.</div>';
                        }
                    }
                ?>
          

            <p>If you already have an account  <a href= "login.php">  Click Login</a></p>
        </div>





    </body>

            <script>
                window.addEventListener('pageshow', function(event) {
                    if (event.persisted || window.performance && window.performance.navigation.type === 2) {
                        document.getElementById('form-container').reset();
                    }
                });
            </script>



    </html>