<?php
if (isset($_POST["submit"])) {
    $fullname = $_POST["fname"];
    $username = $_POST["uid"];
    $email = $_POST["email"];   
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];

    require_once './detabase.inc.php';
    require_once './functions.inc.php';

    $emptyInput = emptyInputSignup($fullname, $username, $email,  $pwd, $repwd);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $repwd);
    $uidExists = uidExists($conn, $username, $email);

    if ($emptyInput !== false) {
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false) {
        header("Location:../signup.php?error=invalidUsername");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:../signup.php?error=invalidEmail");
        exit();
    }
    if ($pwdMatch !== false) {
        header("Location:../signup.php?error=passworddontmatch");
        exit();
    }
    if ($uidExists !== false) {
        header("Location:../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fullname, $username,$email, $pwd);
} else {
    header('Location:../login.php');
    exit();
}
?>
