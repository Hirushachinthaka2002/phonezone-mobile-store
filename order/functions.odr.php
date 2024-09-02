<?php
    session_start();


function emptyInputOrder($fullName, $country, $address, $pcode, $email, $cnum, $brand,$phoneType, $colour,$storage,$date) {
    $result=null;
    if(empty($fullName) || empty($country) || empty($address) || empty($pcode) || empty($email) || empty($cnum) || empty($brand) || empty($phoneType) || empty($colour) || empty($storage) || empty($date)){
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

function invalidCnum($cnum){
    $result=null;
    if(!preg_match("/^\d{10}$/", $cnum)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// function invalidPcode($pcode){
//     $result;
//     if(!preg_match("/^\d{10}$/", $pcode)){
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }


function sendOrder($conn, $fullName, $country, $address, $pcode, $email, $cnum,$brand,$phoneType,$colour,$storage,$date,$userId){
    $sql = "INSERT INTO orders (usersName,usersCountry, usersAddress, usersPcode, usersEmail, usersCnum ,brandName, brandType, brandColour, brandStorage,orderedDate,userUid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:orders.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssissssss", $fullName, $country, $address, $pcode, $email, $cnum, $brand,$phoneType,$colour,$storage,$date,$userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../n_userprofile.php?error=none");
    exit();
}

?>