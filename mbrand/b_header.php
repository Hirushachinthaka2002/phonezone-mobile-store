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
        background-image: url("photo/brandpage.jpg");
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
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
        text-align:center;
    }
    ul li {
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
    li a:hover:not(.active) {
        background-color: hsl(35, 85%, 52%); 
    }
    .active {
        background-color: #3233; 
    }
        /* nav dropdown */
        ul li ul.dropdown li {
            display:block;
        }
        .ddul li{
            width:137px;
        }
        ul li ul.dropdown  {
        /* opacity: 0.9; */
        background:#333;
        position: absolute;
        z-index: 999;
        display: none;
        }
        ul li a:hover{
        background:hsl(35, 85%, 52%);
        }
        ul li:hover ul.dropdown{
        display:block ;
        }


    
    /* phone page css */
    .torder{
        font-size:20px;
        padding:20px;
        color:#fff;
    }
    .torder h2{
        font-size: 30px;
        padding-top:110px;
        padding-right:40px;
        color:hsl(35, 85%, 52%);
    }
    .torder h5{
        font-size: 25px;
        padding-left: 23px;
        padding-top:20px;
        padding-right:40px;
        color:hsl(35, 85%, 52%);
    }
    .torder p{
        padding-left: 30px;
        padding-right:40px;
    }
    .card-main{
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(350px,450px));
        padding: 10px;
        gap: 1rem;
        justify-content: center;
    }
    .product-card {
        background-color: white;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        width: 300px;
        padding: 30px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
        display: grid;

    }
    .product-image {
        margin-left: 59px;
        width: 180px;
        height: 180px;
        object-fit: contain;
        border-radius: 10px;
        margin-bottom: 19px;
    }

    .product-card h2 {
        font-size: 18px;
        margin-bottom: 15px;
        color: #e67e22;
    }
    .features {
        text-align: left;
        margin-bottom: 20px;
    }
    .features li {
        margin-bottom: 10px;
        list-style: circle;
        font-size: 15px;
        color: #000;
    }
    .price-range {
        font-size: 16px;
        color: #e67e22;
        margin-bottom: 15px;
    }
    .price-range span {
        font-weight: bold;
        color: #e67e22;
    }
    .order-btn {
        display: inline-block;
        background-color: #f39c12;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        align-items: center;
    }

    .order-btn:hover {
        background-color: #e67e22;
    }


     /* search bar navbar*/
    .search{
        width:330px;
        float: left;
        margin-left: 2px;
    }
    .srch{
        font-family:"Times New Roman";
        width:200px;
        height:40px;
        background:transparent;
        border:1px solid hsl(35, 85%, 52%);
        margin-top:1px;
        color:#fff;
        font-size:16px;
        float:left;
        padding:15px;
        border-bottom-left-radius:5px;
        border-top-left-radius:5px;
    }
    .btn{
        width:100px;
        height:40px;
        background:hsl(35, 85%, 52%);
        border:2px solid hsl(35, 85%, 52%);
        margin-top:1px;
        color:#fff;
        font-size:15px;
        border-bottom-right-radius:5px;    
        border-top-right-radius:5px;
    }
    .btn:focus{ 
        outline:none;
    }
    .srch:focus{
        outline:none;
    }


    /* footer css */
    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }
    footer{
        opacity: 0.8;
        background: #343434;
        padding-top: 30px;
    }
    .fcontainer{
        width: 1140px;
        margin: auto;
        display: flex;
        justify-content: center;
    }
    .footer-content{
        width: 33.3%;
    }
    h6{
        color: hsl(35, 85%, 52%);
        font-size: 20px;
        margin-bottom: 15px;
        text-align: center;
    }
    .footer-content p{
        width:190px;
        margin: auto;
        padding: 7px;
    }
    .footer-content ul{
        text-align: center;
    }
    .list{
        padding: 0;
    }
    .list li{
        width: auto;
        text-align: center;
        list-style-type:none;
        padding: 7px;
        position: relative;
    }
    .list li::before{
        content: '';
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 100%;
        width: 0;
        height: 2px;
        background: #f18930;
        transition-duration: .5s;
    }
    .list li:hover::before{
        width: 70px;
    }
    .social-icons{
        text-align: center;
        padding: 0;
    }
    .social-icons li{
        display: inline-block;
        text-align: center;
        padding: 5px;
    }
    .social-icons i{
        color: white;
        font-size: 25px;
    }
    a{
        text-decoration: none;
    }
    a:hover{
        color: #fff;
        border-radius: 20px;

    }
    .social-icons i:hover{
        color: #fff;
    }
    .bottom-bar{
        background: #f18930;
        text-align: center;
        padding: 10px 0;
        margin-top: 50px;
    }
    .bottom-bar p{
        color: #343434;
        margin: 0;
        font-size: 16px;
        padding: 7px;
    }
    .blogo{
        padding:0px;
        width: 1150px; 
        height: auto;
        margin-left:200px;
    }
</style>
</head>

<body>
<div class="navbar">
    <div class="left">
        <a href="../index.php" class="phone"><img src="photo\weblogo.png" alt="phone zone" class="logo1"></a>
    <ul>
        <li>
            <a href="#">Mobile Brand</a>
                <ul class="dropdown">
                <div class="ddul">
                    <li><a href="../mbrand/phone.php?brand=Iphone">Iphone</a></li>
                    <li><a href="../mbrand/phone.php?brand=Samsung">Samsung</a></li>
                    <li><a href="../mbrand/phone.php?brand=GooglePixel">Google Pixel</a></li>
                    <li><a href="../mbrand/phone.php?brand=Huawei">Huawei</a></li>
                    <li><a href="../mbrand/phone.php?brand=Redmi">Redmi</a></li>
                    <li><a href="../mbrand/phone.php?brand=Realme">Realme</a></li>
                    <li><a href="../mbrand/phone.php?brand=Oppo">Oppo</a></li>
                    <li><a href="../mbrand/phone.php?brand=Vivo">Vivo</a></li>
                    <li><a href="../mbrand/phone.php?brand=Sony">Sony</a></li>
                    <li><a href="../mbrand/phone.php?brand=Honor">Honor</a></li>
                    <li><a href="../mbrand/phone.php?brand=Tecno">Tecno</a></li>
                    <li><a href="../mbrand/phone.php?brand=Infinix">Infinix</a></li>
                </div>
                </ul>
        </li>
        <li>
            <a href="#" class="other">Accessories</a>
                <ul class="dropdown">
                    <li><a href="../items/accessories.php?accesName=Tempered Glass">Tempered Glass</a></li>
                    <li><a href="../items/accessories.php?accesName=Back Cover">Back Cover</a></li>
                    <li><a href="../items/accessories.php?accesName=Airpods">Airpods</a></li>
                    <li><a href="../items/accessories.php?accesName=Charger">Charger</a></li>
                    <li><a href="../items/accessories.php?accesName=Headset">Headset</a></li>
                    <li><a href="../items/accessories.php?accesName=Power Bank">Power Bank</a></li>
                </ul>
        </li>
        <li><a href="../n_contact.php">Contact Details</a></li>
        <li><a href="../n_services.php">Services</a></li>
        <li><a href="../n_about.php">About Us</a></li>
    </ul>
        <div class="search">
        <form action="../search.php" method="GET">
                <input class ="srch" type="search" name="search-value" placeholder="Type To item Name" required>
                <a href="#"> <button class="btn" type='search' name="search">Search</button></a>
        </form>
        </div>
    </div>

    <div class="right">
    <ul>
        <li style="float:right"><?php 
            if (isset($_SESSION ['useruid'])){
                echo '<a class="active" href="../includes/logout.inc.php">LogOut</a>';
            }else{
                echo '<a class="active" href="../signup.php">SingUp</a>';
            }
            ?>
        </li>
         <li style="float:right"><?php 
            if (isset($_SESSION ['useruid'])){
                echo '<a class="active" href="../n_userprofile.php"><i class="fa-solid fa-circle-user"></i> Hi '.$_SESSION ['useruid'].'</a>';
            }else{
            }
            ?>
       </li>
    </ul>
    </div>
</div>

    


    