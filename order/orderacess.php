<?php
date_default_timezone_set('Asia/Colombo');
$phonemodel = '';

 if (isset($_GET['phonemodel'])){
    $phonemodel= $_GET['phonemodel'];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneZone</title>
    <link rel="stylesheet" href="ostyles.css">
</head>
<body>
   
    <a href="../index.php" class="phone"><img src="./photoorder/weblogo.png" alt="phone zone" class="logo1"></a>
  
    <div class="container">

    <form action="process_orderacess.php" method="post" id="form-container">
        <label for="username">Full Name</label>
        <input type="text" id="username" name="fname" placeholder="Your Full Nmae" required>
        <label for="username">Country</label>
        <input type="text" id="username" name="country" placeholder="Your Country" required>
        <label for="username">Address</label>
        <input type="text" id="username" name="ads" placeholder="Your Address" required>
        <label for="username">Post Code</label>
        <input type="text" id="username" name="pcode" placeholder="Enter Postcode" required>
        <label for="username">Email Address</label>
        <input type="text" id="username" name="email" placeholder="Your Email" required>
        <label for="username">Contact Number</label>
        <input type="text" id="username" name="cnum" placeholder="Your Contact Number" required>
        <label for="username">Order Item</label>
        <input type="text" id="username"  disabled value="<?php echo $phonemodel ?>" >
        <input type="text" id="username" name="phoneType"  hidden value="<?php echo $phonemodel ?>" >
    

        <label for="odate">Today Date</label>
        <input type="date" id="odate" value="<?php echo date("Y-m-d") ?>"  disabled >
        <input type="date" id="odate" name="odate" hidden value="<?php echo date("Y-m-d") ?>" >

        <button name="submit" type="submit" >Send Order</button>
    </form>


                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo'<div class ="error">Fill in the all fields</div>';
                        }elseif($_GET["error"] == "invalidContactNumber"){
                            echo'<div class ="error">Invalid Contact NUmber !<br>Try another one.</div>';
                        }elseif($_GET["error"] == "invalidEmail"){
                            echo'<div class ="error">Invalid Email !, Try another one.</div>';
                        }
                    }
                ?>
        
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