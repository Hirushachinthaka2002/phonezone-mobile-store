<?php
    session_start();

if (isset($_POST["submit"])) {
    $fullName = $_POST["fname"];
    $country = $_POST["country"];
    $address = $_POST["ads"];
    $pcode = $_POST["pcode"];
    $email = $_POST["email"];
    $cnum = $_POST["cnum"];
    $brand = $_POST['brand'];
    $phoneType = $_POST['phoneType'];
    $colour = $_POST['colour'];
    $storage = $_POST['storage'];
    $date = $_POST['odate'];
    $userId = $_SESSION ['userid'];

    require_once '../includes/detabase.inc.php';
    // require_once '../includes/functions.inc.php';
    require_once 'functions.odr.php';



    $emptyInput = emptyInputOrder($fullName,$country, $address, $pcode, $email, $cnum,$brand,$phoneType,$colour,$storage,$date);
    $invalidEmail = invalidEmail($email);
    $invalidCnum = invalidCnum($cnum);
    // $invalidPcode = invalidPcode($pcode);
    

    if ($emptyInput !== false) {
        header("Location:orders.php?error=emptyinput");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:orders.php?error=invalidEmail");
        exit();
    }
    if ($invalidCnum !== false) {
        header("Location:orders.php?error=invalidContactNum");
        exit();
    }
    // if ($invalidPcode !== false) {
    //     header("Location:orders.php?error=invalidPostCode");
    //     exit();
    // }

    sendOrder($conn, $fullName, $country, $address, $pcode, $email, $cnum,$brand,$phoneType,$colour,$storage,$date,$userId);
   
}
else{
    header("Location:../n_userprofile.php");
    exit();
}



// // Display profile page
// echo "<h1>Profile Page</h1>";
// echo "<p>Name: $fullName</p>";
// echo "<p>Country: $country</p>";
// echo "<p>Address: $address</p>";
// echo "<p>Post Code: $pcode</p>";
// echo "<p>Email: $email</p>";
// echo "<p>Phone Number: $cnum</p>";
// echo "Your Order";
// echo "<p>Phone Brand: $brand</p>";
// echo "<p>Phone Type: $phoneType</p>";
// echo "<p>Phone Colour: $colour</p>";
// echo "<p>Phone Storage: $storage</p>";
// echo "<p>Ordered Date: $date</p>";

// Prepare email
// $to = "$email, hirushachinthaka445@gmail.com";
// $subject = "Your Details and Order Details";
// $message = "
// Name: $fullname\n
// Country: $country\n
// Address: $address\n
// Post Code: $pcode\n
// Email: $email\n
// Phone Number: $cnumb\n
// Your Order,\n
// Phone brand: $brand\n
// Phone Type: $phonetype\n
// Phone Color: $colour\n
// Phone Storage: $storage
// ";
// $headers = "From: no-reply@yourwebsite.com";

// Send email
// if (mail($to, $subject, $message, $headers)) {
//     echo "<p>Email successfully sent to $to...</p>";
// } else {
//     echo "<p>Email sending failed...</p>";
// }
?>
