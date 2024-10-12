<?php
require_once('../../includes/detabase.inc.php');
$response ='';
$error ='';


if(isset($_GET['token'])){
    $token = $_GET['token'];
    $current_time = date("U");
    $sql = "SELECT * FROM customer WHERE reset_token = '$token' AND token_expires > $current_time";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0){
        if(isset($_POST['pw-change'])){
            $new_pw = $_POST['password'];
            $hashedPwd = password_hash($new_pw, PASSWORD_DEFAULT);
            $resetSQL = "UPDATE customer SET usersPwd ='$hashedPwd', reset_token = NULL, token_expires = NULL WHERE reset_token = '$token'";
            
            try {
                $resetResult = mysqli_query($conn,$resetSQL);
                $response = '<div class="imgv"><img src="../../order/photoorder/zcorrectmark.png" class="vimg"><div>
                            <span class="sucess">Password changed successfully!</span>
                            <p>Please  <a href="../../login.php" style="display:inline-block">login</a></p>';
            } catch (\Throwable $th) {
                $error = "<div class=\"imgv\"><img src=\"../../order/photoorder/exclamation.png\" class=\"vimg\"><div>
                            <span class=\"error-some\">Something went wrong </span>".$th;
            }
            


        }
    }else{
        $error = "<div class=\"imgv\"><img src=\"../../order/photoorder/exclamation.png\" class=\"vimg\"><div>
                <span class=\"error-some\">Link is expired. Please request a new password change. </span>";
    }


}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
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


<body>
<?php if (isset($_GET['token'])) { ?>
<main>
    <div class="foroget-container">
        <form action="./reset_password.php?token=<?php echo $token; ?>" method="post">
                <?php 
                if (!empty($response)) {
                    echo $response;
                } elseif (!empty($error)) {
                    echo $error;
                }else{
                    echo '<h1>Reset Your Password</h1>
                    <p>Please enter a new password</p>
                    <input type="password" name="password" placeholder="Enter your new password" required>
                    <button type="submit" name="pw-change">Reset</button>';
                }
                ?>    
        </form>
    </div>
</main>

<?php } else { ?>
    <main>
        <h1>404 Not Found</h1>
    </main>
<?php } ?>
</body>

</html>