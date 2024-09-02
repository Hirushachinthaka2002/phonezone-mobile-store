<?php
if (isset($_POST["submit"])) {
    $fullname = $_POST["fname"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];

    require_once './admin_db.php';
    require_once './admin_functions.php';

    $emptyInput = emptyInputSignup($fullname, $username, $email,  $pwd, $repwd);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    // $invalidCnum = invalidCnum($cnum);
    $pwdMatch = pwdMatch($pwd, $repwd);
    $ownersExists = ownersExists($conn, $username, $email);

    if ($emptyInput !== false) {
        header("Location:./admin_signup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false) {
        header("Location:./admin_signup.php?error=invalidUsername");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:./admin_signup.php?error=invalidEmail");
        exit();
    }
    // if ($invalidCnum !== false) {
    //     header("Location:../signup.php?error=invalidContactNum");
    //     exit();
    // }
    if ($pwdMatch !== false) {
        header("Location:./admin_signup.php?error=passworddontmatch");
        exit();
    }
    // if ($uidExists !== false) {
    //     header("Location:./admin_signup.php?error=usernametaken");
    //     exit();
    // }

    createOwners($conn, $fullname, $username,$email, $pwd);
} else {
    header('Location:./admin_login.php');
    exit();
}
?>
