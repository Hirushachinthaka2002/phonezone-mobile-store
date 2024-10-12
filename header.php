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
    ul.n {
        list-style: none;
        margin: 0;
        padding: 0;
        background-color: #000;
        text-align:center;
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


     /*nav search bar */
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


    /* homepage inedex page css */
    .hcontent{
        margin-top:110px;
        font-family:"Times New Roman";
        font-size:25px;
        padding:20px;
        color:#fff;
        position: relative;
    }
    .hcontent h1, .hcontent h3{
        color:hsl(35, 85%, 52%);
        padding-left:60px;
        padding-bottom:20px;
        letter-spacing:3px;
    }
    .hcontent p{
        font-size:20px;
        font-weight: bold;
        padding-left:60px;
        padding-bottom:50px;
        letter-spacing:1.5px;
        line-height:30px;
    }
    .hcontent .cn{
        width:190px;
        height:40px;
        background:hsl(35, 85%, 52%);
        border:none;
        margin-bottom:10px;
        margin-left:60px;
        font-size:20px;
        border-radius:10px;
        cursor:pointer;
        transition: .4s ease;
        box-shadow: 0 3px 3px rgba(255,255,255,0.53);
    }
    .hcontent .cn a{
        text-decoration:none;
        color:#000;
        transition: .3s ease;
    }
    .cn:hover{
        background-color:#fff;
        width: 200px;
        height: 45px;
    }
    .hcontent span{
        color:hsl(35, 85%, 52%);
    }


     /* homepage images css */
    .image-container {
        position: left;
        width: 50px;
        height: 40px; 
        overflow: hidden;
    }

    .image {
        position: absolute;
        top: 140px;
        left: 730px;
        width: 50%; 
        height: 70%; 
        opacity: 0;
        transition: opacity 1s ease-in-out;
        animation: switchImage 16s infinite;
    }

        .image1 {
            animation-delay: 0s;
        }

        .image2 {
            animation-delay: 4s;
        }

        .image3 {
            animation-delay: 8s;
        }

        .image4 {
            animation-delay: 12s;
        }

        @keyframes switchImage {
            0%, 20% {
                opacity: 1;
            }
            30%, 100% {
                opacity: 0;
            }
        }

    /*homepage text box css */
    .box-container {
        padding-top: 60px;
        margin-bottom: 100px;
        align-items: center;
        justify-content: center;
        display: flex;
        gap: 20px; 
    }
    .box {
        opacity: 0.7;
        margin:center;
        background-color: hsl(35, 85%, 52%);
        padding: 20px;
        border: 1px solid #000;
        border-radius:10px;
        text-align: center;
        font-size: 14px;
        font-weight: bold;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        width: 400px;
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .box p{
        color:#000;
    }
    .logo {
        width: 120px;
        height: auto;
        margin-bottom: 10px; 
    }
    .box-text {
        margin: 0;
    }


    /* contact page css */
    .box-center{
        padding-top: 130px;
        margin-bottom: 200px;
        align-items: center;
        justify-content: center;
        display: flex;
        color: #fff;
    }
    .contact{
        color: #e0e0e0;
        padding: 100px;
        margin:center;
        padding: 20px;
        text-align: center;
        font-size: 29px;
        font-weight: bold;
        font-size: 14px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 60px;
        position: relative;
    }
    .contact::before{
        position: absolute;
        content: '';
        background-image: url("./photo/contactpage.png");
        background-repeat: no-repeat;
        background-size: 1700px 650px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 30px;
        z-index: -1;
        opacity: 50%;
    }
    .contact-details h2{
            margin-bottom: 30px;
    }


     /*User Profile Orders box css */
     .profile {
        padding: 100px 100px 20px 30px;
     }
     .profile h1, .profile h2{
        color: #f18930;
     }
     .box-container_order {
        padding: 30px;
        display: flex;
    }
    .orders{
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(350px,500px));
    } 
    .box_order {
        opacity: 0.9;
        margin:center;
        background-color: white;
        padding: 30px;
        border: 1px solid #000;
        border-radius:10px;
        font-size: 14px;
        font-weight: bold;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        width: 530px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .box_order p{
        color:black;
    }
    .order-status{
        background-color:#f18930;
        border-radius:10px;
        font-size: 14px;
        width: fit-content;

        h3{
            padding: 10px;
            color:#000;
        }
    } 
    ul.o li {
        padding:3px;
        margin-left:40px;
        list-style-type: square;
        color:black;
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
        padding: 0px 0;
        margin-top: 0px;
    }
    .bottom-bar p{
        color: #343434;
        margin: 0;
        font-size: 16px;
        padding: 7px;
    }
    .blogo{
        padding:0px;
        width: 900px; 
        height: auto;
        margin-left:23%;
    }


    /* search page items cards CSS */
    .card-main{
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(350px,450px));
        padding: 10px;
        gap: 1rem;
        justify-content: center;
        margin-top: 70px;
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
        color: #f18930;
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
    

    /* services page CSS */
    .services-content{
        margin-top: 134px;
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 69px;
        text-align: justify;
        position: relative;
    }
    .services-content::before{
        position: absolute;
        content: '';
        background-image: url("./photo/ssssss.png");
        background-repeat: no-repeat;
        background-size: 1700px 700px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 30%;
    }
    .services-content h2{
       font-size: 50px;
       color: #e67e22;
    }
    .in-content :not(h2){
        margin-bottom: 20px;
        margin-left: 30px;
    }
    .in-content h3{
        color: #e67e22;
        font-size: 25px;
    }
    .in-content p{
        margin-left: 50px;
        margin-right: 160px;
        margin-top: 10px;
        margin-bottom: 15px;
        font-size: 18px;
    }
    .in-body{
        margin-left: 10px;
    }
    .in-body li{
        color: #fff;
        opacity: 70%;
    }


    /* About page CSS */
    .about-content{
        margin-top: 134px;
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 69px;
        text-align: justify;
        position: relative;
    }
    .about-content::before{
        position: absolute;
        content: '';
        background-image: url("./photo/about-image.png");
        background-repeat: no-repeat;
        background-size: 1700px 600px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 30%;
    }
    .about-content h2{
       font-size: 50px;
       color: #e67e22;
    }
    .about-in :not(h2){
        margin-bottom: 20px;
        margin-left: 30px;
    }
    .about-in h3{
        color: #e67e22;
        font-size: 25px;
    }
    .about-in p{
        margin-left: 50px;
        margin-right: 160px;
        margin-top: 10px;
        margin-bottom: 15px;
        font-size: 18px;
    }
    .team-details >:not(h2){
        margin-bottom: 40px;
        display: grid;
        grid-template-columns: repeat(6,minmax(200px,250px));
        justify-content: center;
    }
    .team-details h2{
        font-style: Verdana;
        font-weight: 600px;
        color: #e67e22;
        font-size: 40px;
        text-align: center;
    }
    .image-details{
        border-radius: 17px;
        margin-top: 50px;
        background-color: #e0e0e0;
        width: 210px;
        height:350px;
        text-align: center;
        box-shadow: 0 5px 5px rgba(254,222,0,0.43);
        opacity: 80%;
    }
    .image-details h4{
        margin-top: 20px;
        font-size: 20px;
        color: #f18930;
    }
    .image-details p{
        margin-top: 0px;
        color: #f18930;
    }
    .icon-in{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 14px;
    }
    .icon-in i{
        margin-top: 20px;
        font-size: 28px;
        color: #000;
        margin-left: 20px;
    }
    .icon-in i:hover{
        color: #e67e22;
        width: 33px;
    }
    .photo-member{
        border-radius: 17px;
        margin-top: 35px;
        width: 140px;
        height: auto;
        box-shadow: 0 8px 8px rgba(0,0,0,0.2);
        border-radius: 10%;

    }
    .admin-btn{
        justify-content: center;
        display: flex;
        margin-bottom: 70px;
    }
    .admin-btn .ad-btn{
        width:190px;
        height:40px;
        background:hsl(35, 85%, 52%);
        border:none;
        margin-bottom:10px;
        margin-left:60px;
        font-size:20px;
        border-radius:10px;
        cursor:pointer;
        transition: .4s ease;
        box-shadow: 0 3px 3px rgba(255,255,255,0.53);
       
    }
    .admin-btn .ad-btn a{
        text-decoration:none;
        color:#000;
        transition: .3s ease;
    }
    .ad-btn:hover{
        background-color:#fff;
    }


</style>
</head>

<body>
<div class="navbar">
    <div class="left">
        <a href="index.php" class="phone"><img src="photo\weblogo.png" alt="phone zone" class="logo1"></a>
    <ul class="n">
        <li>
            <a href="#">Mobile Brand</a>
                <ul class="dropdown">
                <div class="ddul">
                    <li><a href="mbrand/phone.php?brand=Iphone">Iphone</a></li>
                    <li><a href="mbrand/phone.php?brand=Samsung">Samsung</a></li>
                    <li><a href="mbrand/phone.php?brand=GooglePixel">Google Pixel</a></li>
                    <li><a href="mbrand/phone.php?brand=Huawei">Huawei</a></li>
                    <li><a href="mbrand/phone.php?brand=Redmi">Redmi</a></li>
                    <li><a href="mbrand/phone.php?brand=Realme">Realme</a></li>
                    <li><a href="mbrand/phone.php?brand=Oppo">Oppo</a></li>
                    <li><a href="mbrand/phone.php?brand=Vivo">Vivo</a></li>
                    <li><a href="mbrand/phone.php?brand=Sony">Sony</a></li>
                    <li><a href="mbrand/phone.php?brand=Honor">Honor</a></li>
                    <li><a href="mbrand/phone.php?brand=Tecno">Tecno</a></li>
                    <li><a href="mbrand/phone.php?brand=Infinix">Infinix</a></li>
                </div>
                </ul>
        </li>
        <li>
            <a href="#" class="other">Accessories</a>
                <ul class="dropdown">
                    <li><a href="items/accessories.php?accesName=Tempered Glass">Tempered Glass</a></li>
                    <li><a href="items/accessories.php?accesName=Back Cover">Back Cover</a></li>
                    <li><a href="items/accessories.php?accesName=Airpods">Airpods</a></li>
                    <li><a href="items/accessories.php?accesName=Charger">Charger</a></li>
                    <li><a href="items/accessories.php?accesName=Headset">Headset</a></li>
                    <li><a href="items/accessories.php?accesName=Power Bank">Power Bank</a></li>
                </ul>
        </li>
        <li><a href="n_contact.php">Contact Details</a></li>
        <li><a href="n_services.php">Services</a></li>
        <li><a href="n_about.php">About Us</a></li>
    </ul>
        <div class="search">
        <form action="search.php" method="GET">
                <input class ="srch" type="search" name="search-value" placeholder="Type To item Name" required>
                <a href="#"> <button class="btn" type='search' name="search">Search</button></a>
        </form>
        </div>
    </div>

    <div class="right">
    <ul class="n">
        <li style="float:right"><?php 
            if (isset($_SESSION ['useruid'])){
                echo '<a class="active" href="includes/logout.inc.php">LogOut</a>';
            }else{
                echo '<a class="active" href="signup.php">SingUp</a>';
            }
            ?>
        </li>
         <li style="float:right"><?php 
            if (isset($_SESSION ['useruid'])){
                echo '<a class="active" href="n_userprofile.php"><i class="fa-solid fa-circle-user"></i> Hi '.$_SESSION ['useruid'].'</a>';
            }else{
            }
          ?>
       </li>
    </ul>
    </div>
</div>


