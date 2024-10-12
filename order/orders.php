<?php

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

    <form action="process_order.php" method="post" id="formSubmit">
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
        
        <label for="colour">Colour</label>
        <select id="colour" name="colour" >
            <option value="">Select a Colour</option>
            <option value="black">Black</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="white">White</option>
         </select>

         <label for="storage">Storage</label>
        <select id="storage" name="storage">
            <option value="">Select a Storage</option>
            <option value="64">64 GB</option>
            <option value="128">128 GB</option>
            <option value="256">256 GB</option>
         </select>


        <label for="dining-date">Today Date</label>
        <input type="date" id="username" name="odate" required>

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
</html>  