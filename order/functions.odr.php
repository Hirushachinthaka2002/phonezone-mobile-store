<?php
    session_start();


function emptyInputOrder($fullName, $country, $address, $pcode, $email, $cnum, $colour,$storage) {
    $result=null;
    if(empty($fullName) || empty($country) || empty($address) || empty($pcode) || empty($email) || empty($cnum)  || empty($colour) || empty($storage)){
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





function sendOrder($conn, $fullName, $country, $address, $pcode, $email, $cnum,$phoneType,$colour,$storage,$date,$userId){
    
    $orderstatus = 'pending';
    $sql = "INSERT INTO orders (usersName,usersCountry, usersAddress, usersPcode, usersEmail, usersCnum , brandType, brandColour, brandStorage,orderedDate,userUid,status) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:orders.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssissssss", $fullName, $country, $address, $pcode, $email, $cnum,$phoneType,$colour,$storage,$date,$userId,$orderstatus);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../n_userprofile.php?error=none");
    exit();
}

?>