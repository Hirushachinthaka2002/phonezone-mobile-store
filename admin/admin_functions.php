<?php
function emptyInputSignup($fullname, $username,$email,  $pwd, $repwd){
    $result=null;
    if(empty($fullname) || empty($username) ||  empty($email) || empty($pwd) || empty($repwd)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result=null;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result=null;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function pwdMatch($pwd, $repwd){
    $result=null;
    if($pwd !== $repwd){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


// Owners create and login

function createOwners($conn, $fullname, $username, $email, $pwd){
    $sql = "INSERT INTO owners (usersName, usersUid, usersEmail,usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:./admin_signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:./admin_user.php?error=none");
    exit();
}

function ownersExists($conn, $username, $email){
    $sql = "SELECT * FROM owners WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:./admin_signup.php?error=stmtfailed");
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


function emptyInputLogin($username, $pwd){
    $result=null;
    if( empty($username) || empty($pwd)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginOwners($conn, $username, $pwd){
    $ownersExists = ownersExists($conn, $username, $username);
    if($ownersExists === false){
        header("Location:./admin_login.php?error=eronglogin");
        exit();
    }

    $pwdHashed = $ownersExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("Location:./admin_login.php?error=wronglogin");
        exit();
    } else if($checkPwd === true){
        session_start();
        $_SESSION ['userid'] = $ownersExists['usersId'];
        $_SESSION ['useruid'] = $ownersExists['usersUid'];
        $_SESSION ['userfname'] = $ownersExists['usersName'];
        header("Location:./admin_user.php");
        exit();
    }
}