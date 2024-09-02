<?php
    if (isset($_POST["submit"])){
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once '../includes/detabase.inc.php';
        require_once '../include/functions.inc.php';

        if (emptyInputLogin($username, $pwd) !== false ){
            exit();
        }

        loginOwners($conn, $username, $pwd);
    }
    else{
        header("Location:admin_login.php");
        exit();
    }
    ?>