<?php
    if (isset($_POST["submit"])){
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once './admin_db.php';
        require_once './admin_functions.php';

        if (emptyInputLogin($username, $pwd) !== false ){
            exit();
        }

        loginOwners($conn, $username, $pwd);
    }
    else{
        header("Location:./admin_login.php");
        exit();
    }
    ?>