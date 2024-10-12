<?php
require_once('../../includes/detabase.inc.php');
require_once('./mail_config.php');
echo date('U');

$error = '';
$response = '';



$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';


$host = $_SERVER['HTTP_HOST'];

$fullUrl = $protocol . '://' . $host;


if (isset($_POST['pw-reset'])) {
    $userInput = $_POST['email'];

    $SQLcheckUser = "SELECT * FROM customer WHERE usersEmail = '$userInput'";

    try {
        $SQLcheckUserResult = mysqli_query($conn, $SQLcheckUser);
        if (mysqli_num_rows($SQLcheckUserResult) > 0) {
          
            $checkDetails = mysqli_fetch_assoc($SQLcheckUserResult);
            $username = $checkDetails['usersUid'];
            echo $username;
         
            $token = bin2hex(random_bytes(32));
            $expiry = date("U") + 1800;

         
            $updateUserTokenSQL = "UPDATE customer SET reset_token = '$token', token_expires = '$expiry' WHERE usersEmail = '$userInput'";
            mysqli_query($conn, $updateUserTokenSQL);

         
            $resetLink = $fullUrl . "./phonezone-mobile-store/Forget_password/forget_reset/reset_password.php?token=" . $token;
            $response = sendVerificationEmail($userInput, $username, $resetLink);

        
        } else {
            echo 'errpr';
            $error = "<div class=\"imgv\"><img src=\"../../order/photoorder/exclamation.png\" class=\"vimg\"><div>
                    <span class=\"error-some\">Invalid Email or Password</span>";
        }
    } catch (\Throwable $th) {
        $error = "<div class=\"imgv\"><img src=\"../../order/photoorder/exclamation.png\" class=\"vimg\"><div>
                    <span class=\"error-some\">Something went wrong</span>" . $th;
    }
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
                background-image: url('../../photo/s-lpage.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
        .foroget-container {
            width: 400px;
            padding: 20px;
            margin-top: 200px;
            background-color: #333;
            opacity: 0.8;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
            text-align: center;
        }
        p {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
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
        p a{
            color: hsl(35, 85%, 62%); 
        }
        .sucess{
            color: green;
            text-align: center;
            font-size: 22px;
        }
        .imgv{
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .vimg{
            width: 100px;
            height: auto;     
        }
        .error-some{
            color: red;
            text-align: center;
            font-size: 22px;
        }
    </style>
</head>

<main>
    <div class="foroget-container">
        <form action="forgot-password.php" method="post">
                <?php if (!empty($response)) {
                    echo $response;
                } elseif (!empty($error)) {
                    echo $error;
                }else{
                    echo '<h1>Password Reset</h1>
                    <p>Please login into continue</p>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit" name="pw-reset">Reset</button>
                    <p>Back to<a href="../../login.php">     Login</a></p>';
                }

                ?>
                
                
        </form>
    </div>
</main>