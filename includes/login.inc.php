<?php
    if (isset($_POST["submit"])){
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once 'detabase.inc.php';
        require_once 'functions.inc.php';


        $emptyInput = emptyInputLogin($username, $pwd);


        if (emptyInputLogin($username, $pwd) !== false ){
            exit();
        }

        loginUser($conn, $username, $pwd);
    }
    else{
        header("Location:../login.php");
        exit();
    }
    ?>