<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PhoneZone</title>
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <style>
    body{
    background-image: url("./brandpage.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }
    /* navigation bar (brad to aboutus) */
    * {
        padding: 0;
        margin: 0; 
    }
    .navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #000;
        padding: 10px 20px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
        backdrop-filter: blur(5px);
    }
    .right{
        padding-right: 50px;
    }
    .left,.right{
        display:flex;
        align-items:center;
    }
    .pone{
        display:flex;
        align-items:center;
        text-decoration:none;
        margin-right: 20px;
    }
    .logo1{
        height:60px;
        width:190px; 
    }
    ul.n {
    list-style: none;
    margin-left: 100px;
    padding: 0;
    text-align:center;
    }
    ul .n:hover{
        background-color: #fff;
    }
    ul.n li {
    display: inline-block;
    position: relative;
    }
    ul li a {
    display: block;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 16px;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
    }
    ul .n li a:hover:not(.active) {
    background-color: hsl(35, 85%, 52%); 
    }
    .active {
    background-color: #3233; 
    }


    table {
        margin-top: 20px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        color: #fff;
        margin-bottom: 30px;
    }

    td, th {
    border: 1px solid #fff;
    text-align: center;
    padding: 8px;

    }
    tr:nth-child(even) {
        background-color:hsl(35, 85%, 52%);
    }
    .btno {
        width:100px;
        height:40px;
        background:#fff;
        margin-top:1px;
        color:#000;
        font-size:15px;
        border-radius: 12px;
        cursor: pointer;
        box-shadow: 0 1px #fff;
    }
    .btno:hover {
        background-color: hsl(35, 85%, 50%);
    }
    .btno:active {
        background-color: red;
        box-shadow: 0 2px #666;
        transform: translateY(2px);
    }
    h3{
        color: #fff;
        margin-top: 110px;
        padding-left: 30px;
        font-size: 30px;
    }
    
</style>
</head>
<body>
<div class="navbar">
    <div class="left">
        <a href="#" class="phone"><img src="./weblogo.png" alt="phone zone" class="logo1"></a>
    <ul class="n">
        <li><a class="active" href="./admin_signup.php">SingUp</a></li>
        <li><a class="active" href="./admin_logout.php">LogOut</a></li>
    </ul>
    </div>
</div>

    


    