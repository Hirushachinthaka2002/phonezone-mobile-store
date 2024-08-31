<?php
function emptyInputSignup($fullname, $username,$email,  $pwd, $repwd){
    $result;
    if(empty($fullname) || empty($username) ||  empty($email) || empty($pwd) || empty($repwd)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// function invalidCnum($cnum){
//     $result;
//     if(!preg_match("/^\d{10}$/", $cnum)){
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

function pwdMatch($pwd, $repwd){
    $result;
    if($pwd !== $repwd){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM customer WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
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

function createUser($conn, $fullname, $username, $email, $pwd){
    $sql = "INSERT INTO customer (usersName, usersUid, usersEmail,usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if( empty($username) || empty($pwd)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists === false){
        header("Location:../signup.php?error=eronglogin");
        exit();
    }

    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("Location:../signup.php?error=wronglogin");
        exit();
    } else if($checkPwd === true){
        session_start();
        $_SESSION ['userid'] = $uidExists['usersId'];
        $_SESSION ['useruid'] = $uidExists['usersUid'];
        $_SESSION ['userfname'] = $uidExists['usersName'];
        header("Location:../index.php");
        exit();
    }
}
?>
