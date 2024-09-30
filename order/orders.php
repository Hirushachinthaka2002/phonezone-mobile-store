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
    <style>
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

        /* popup css */
        .popup{
            width: 400px;
            background: #fff ;
            border-radius: 8px;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%,-50%) scale(0.1);
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }
        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
        }

        .popup img{
            width: 100px;
            margin-top: 8px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .popup h2{
            font-size:38px;
            font-weight:600;
            margin: 30px 0 10px;
        }
        .popup button{
            width: 100px;
            margin-top: 40px;
            padding: 10px 0;
            border-radius:4px;
            border: 0;
            outline:none;
            font-size:18px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2)
        }
        

    </style>
</head>
<body>
   
    <a href="../index.php" class="phone"><img src="weblogo.png" alt="phone zone" class="logo1"></a>
  
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
        <label for="username">phone Type</label>
        <input type="text" id="username"  disabled value="<?php echo $phonemodel ?>" >
        <input type="text" id="username" name="phoneType"  hidden value="<?php echo $phonemodel ?>" >
        
        <!-- <label for="brand">Phone Brand</label>
        <select id="brand" name="brand" onchange="updatePhoneTypes()">
            <option value="">Select a brand</option>
            <option value="iphone">iPhone</option>
            <option value="redmi">Redmi</option>
            <option value="samsung">Samsung</option>
            <option value="pixel">Google Pixel</option>
            <option value="huawei">Huawei</option>
            <option value="realme">Realme</option>
            <option value="oppo">Oppo</option>
            <option value="sony">Sony</option>
            <option value="honor">Honor</option>
            <option value="vivo">Vivo</option>
            <option value="tecno">Tecno</option>
            <option value="infinix">Infinix</option>
            <option value="airpods">Airpods</option>
            <option value="charger">Charger</option>
            <option value="powerbank">Powerbank</option>
            <option value="tempered">Tempered Glass</option>
            <option value="cover">Back Cover</option>
            <option value="headset">Headset</option>
        </select> -->

        <!-- <label for="phoneType">Phone Type</label>
        <select id="phoneType" name="phoneType">
            <option value="">Select a type</option>
        </select> -->

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

        <button name="submit" type="submit" onclick="openPopup()">Send Order</button>
    </form>
    </div>
<!-- 
    <div class="popup" id="popup">
        <img src ="correctmark.png">
        <h2>Thank You</h2>
        <p>Your details has been successfully submitted.</p>
        <button type="button" onclick="closePopup()">OK</button>
    </div>

<script>
    

let popup = document.getElementById("popup");

let orderForm = document.getElemendById('formSubmit')

orderForm.addEventListener("submit",()=>{
    popup.classList.add("open-popup")
}) 

function closePopup(){
    popup.classList.remove("open-popup");
}
</script> -->
    <script src="orders.js"></script>

</body>
</html>
