<?php
// Owners create and login


function createOwners($conn, $fullname, $username, $email, $pwd){
    $sql = "INSERT INTO owners (usersName, usersUid, usersEmail,usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../admin/admin_signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../admin/admin_login.php?error=none");
    exit();
}

function ownersExists($conn, $username, $email){
    $sql = "SELECT * FROM owners WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../admin/admin_signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function loginOwners($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists === false){
        header("Location:../admin/admin_signup.php?error=eronglogin");
        exit();
    }

    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("Location:../admin/admin_signup.php?error=wronglogin");
        exit();
    } else if($checkPwd === true){
        session_start();
        $_SESSION ['userid'] = $uidExists['usersId'];
        $_SESSION ['useruid'] = $uidExists['usersUid'];
        $_SESSION ['userfname'] = $uidExists['usersName'];
        header("Location:../admin/admin_home.php");
        exit();
    }
}