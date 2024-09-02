<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hiru Mobile Shop</title>
    <style>
            * {
                padding: 0;
                margin: 0; 
            }
        body{
                background-image: url('brandpage.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
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
    </style>
</head>
<body>
    <div class="home1">
        <a href="admin_home.php" class="phone"><img src="weblogo.png" alt="phone zone" class="logo1"></a>
    </ul>
        <li style="float:right"><a class="active" href="./admin_login.php">Login</a></li>
    </ul><br>
    </div>

    <div class="container">
        <div class="login-container" id="login-container">
            <h2>Register</h2>
            <form action="includes/signup.inc.php" method="post">
                <label for="username">Full Name</label>
                <input type="text" id="username" name="fname" required>
                <label for="username">Username</label>
                <input type="text" id="username" name="uid" required>
                <label for="username">Email Address</label>
                <input type="text" id="username" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" required>
                <label for="password">Re-Password</label>
                <input type="password" id="password" name="repwd" required>
                <button name="submit" type="submit"><h3>Register<h3></button>
            </form>
            <p>If you already have an account  <a href= "./admin_login.php">  Click Login</a></p>
        </div>
    </body>
    </html>