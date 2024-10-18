<?php
session_start();
    if (isset($_SESSION ['userid'])){
        header("Location:./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color: #3233;
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
            background-color: hsl(35, 85%, 60%);
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: hsl(35, 85%, 52%);
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
       .sf{
        text-align: center;
        margin-top: 12px;
       }
       .sf p{
        margin-top: 10px;
       }

    </style>
</head>
<body>
    <div class="home1">
        <a href="index.php" class="phone"><img src="photo\weblogo.png" alt="phone zone" class="logo1"></a>
    </ul>
        <li style="float:right"><a class="active" href="signup.php">SignUp</a></li>
    </ul><br><br><br>
    </div>

    <div class="container">
        <div class="login-container" id="login-container">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post" id="form-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="uid" placeholder="Username or Email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" placeholder=password required>
                <button name="submit" type="submit"><h3>Login</h3></button>
            </form>

            <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "wrongloginname"){
                            echo'<div class ="error">Invalid Username or Email<br>If you don\'t have an account<br>Please create one.</div>';
                        }elseif($_GET["error"] == "wrongloginpassword"){
                            echo'<div class ="error">Invalid Password !<br>Try correct one.<br>If you don\'t have an account<br>Please create one.</div>';
                        }
                    }
                ?>
            <div class="sf">
                <p><a href= "./Forget_password/forget_reset/forgot-password.php">Forogt Password</a></p>
                <p>If you don't already have an account <a href= "signup.php">Click Register</a></p>
            </div>
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