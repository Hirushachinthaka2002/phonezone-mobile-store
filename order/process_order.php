<?php
    session_start();

if (isset($_POST["submit"])) {
    $fullName = $_POST["fname"];
    $country = $_POST["country"];
    $address = $_POST["ads"];
    $pcode = $_POST["pcode"];
    $email = $_POST["email"];
    $cnum = $_POST["cnum"];
    $phoneType = $_POST['phoneType'];
    $colour = $_POST['colour'];
    $storage = $_POST['storage'];
    $date = $_POST['odate'];
    $userId = $_SESSION ['userid'];
    

    require_once '../includes/detabase.inc.php';
    require_once './functions.odr.php';



    $emptyInput = emptyInputOrder($fullName,$country, $address, $pcode, $email, $cnum,$colour,$storage);
    $invalidEmail = invalidEmail($email);

    

    if ($emptyInput !== false) {
        header("Location:orders.php?error=emptyinput&phonemodel=$phoneType");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:orders.php?error=invalidEmail&phonemodel=$phoneType");
        exit();
    }

  
    sendOrder($conn, $fullName, $country, $address, $pcode, $email, $cnum,$phoneType,$colour,$storage,$date,$userId);
   
}
    else{
        header("Location:../n_userprofile.php");
        exit();
    }

?>
