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
    $date = $_POST['odate'];
    $userId = $_SESSION ['userid'];
    

    require_once '../includes/detabase.inc.php';
    require_once './functions.orderacess.php';



    $emptyInput = emptyInputOrder($fullName,$country, $address, $pcode, $email, $cnum);
    $invalidEmail = invalidEmail($email);

    

    if ($emptyInput !== false) {
        header("Location:orderacess.php?error=emptyinput&phonemodel=$phoneType");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:orderacess.php?invalidEmail&phonemodel=$phoneType");
        exit();
    }

  
    sendOrder($conn, $fullName, $country, $address, $pcode, $email, $cnum,$phoneType,$date,$userId);
   
}
    else{
        header("Location:../n_userprofile.php");
        exit();
    }

?>
