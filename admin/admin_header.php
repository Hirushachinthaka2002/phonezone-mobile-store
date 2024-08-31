<!DOCTYPE html>
<html lang="en">
<head>
    <title>PhoneZone</title>
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <style>
    body{
        
        background-color: black; 
    /* background-image: url("admin/brandpage.jpg"); */
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
        /* background-color: #3233; */
        padding: 10px 20px;
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
    /* background-color: #3233; */
    text-align:center;
    }
    ul li {
    display: inline-block;
    position: relative;
    }
    ul li a {
    display: block;
    color: white;
    font-family: Georgia, serif;
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

    /* .right{ 
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #3233;
        padding: 10px 20px;
        display: inline-block;
        position: relative;
        background-color: #3233; 
        background-color: #111;
        display: block;
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        margin: 0;
        padding: 0;
        background-color: #3233;
        text-align:center;
     } */

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


    /* brand phone image css */
    .table-image { 
        width: 480px;
        border-radius: 8px;
        height: auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }
    /* .table-image:hover {  
        width: 500px;  
    }

    /* phone page css */
    .torder{
        /* font-size:10px; */
        padding:20px;
        color:#fff;
    }
    .torder h2,h5{
        padding-top:10px;
        padding-right:40px;
        color:hsl(35, 85%, 52%);
    }
    /* items css ass..  */
    .item-image { 
        padding:50px;
        width: 300px;
        border-radius: 8px;
        height: auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 10px;
        margin-left: 50px;
        margin-right: 50px;

    }
    .item-image:hover {  
        width: 310px;  
    }



     /* search bar */
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
    .btn:focus{ color
        outline:none;
    }
    .srch:focus{
        outline:none;
    }


    /* homepage inedex page css */
    .hcontent{
        margin-top:60px;
        font-family:"Times New Roman";
        font-size:25px;
        padding:20px;
        color:#fff;
        position: relative;
    }
    .hcontent h1,h3{
        color:hsl(35, 85%, 52%);
        padding-left:60px;
        padding-bottom:20px;
        letter-spacing:3px;
        /* margin-top:9%; */
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
        width:140px;
        height:40px;
        background:hsl(35, 85%, 52%);
        border:none;
        margin-bottom:10px;
        margin-left:60px;
        font-size:20px;
        border-radius:10px;
        cursor:pointer;
        transition: .4s ease;
    }
    .hcontent .cn a{
        text-decoration:none;
        color:#000;
        transition: .3s ease;
    }
    .cn:hover{
        background-color:#fff;
    }
    .hcontent span{
        color:hsl(35, 85%, 52%);
    }

     /* homepage images css */
    .image-container {
        position: left;
        width: 50px;  /* Adjust as needed */
        height: 40px; /* Adjust as needed */
        overflow: hidden;
        /* padding:700px; */
    }

    .image {
        /* padding:30px; */
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
        margin-bottom: 100px;
        align-items: center;
        justify-content: center;
        display: flex;
        gap: 20px; /* Adjust the gap between boxes as needed */
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
        width: 400px; /* Adjust the width of the boxes as needed */
        height: 250px; /* Adjust the height of the boxes as needed */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .box p{
        color:#000;
    }

    .logo {
        width: 120px; /* Adjust the size of the logo as needed */
        height: auto;
        margin-bottom: 10px; /* Space between logo and text */
    }

    .box-text {
        margin: 0;
    }


    
    /* footer css */
    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        /* font-size: 16px; */
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
        <a href="index.php" class="phone"><img src="weblogo.png" alt="phone zone" class="logo1"></a>
    <ul>
        <li>
            <a href="#">Mobile Brand</a>
                <ul class="dropdown">
                <div class="ddul">
                    <li><a href="mbrand/b_iphone.php">Iphone</a></li>
                    <li><a href="mbrand/b_samsung.php">Samsung</a></li>
                    <li><a href="mbrand/b_pixel.php">Google Pixel</a></li>
                    <li><a href="mbrand/b_huawei.php">Huawei</a></li>
                    <li><a href="mbrand/b_redmi.php">Redmi</a></li>
                    <li><a href="mbrand/b_realme.php">Realme</a></li>
                    <li><a href="mbrand/b_oppo.php">Oppo</a></li>
                    <li><a href="mbrand/b_vivo.php">Vivo</a></li>
                    <li><a href="mbrand/b_sony.php">Sony</a></li>
                    <li><a href="mbrand/b_honor.php">Honor</a></li>
                    <li><a href="mbrand/b_tecno.php">Tecno</a></li>
                    <li><a href="mbrand/b_infinix.php">Infinix</a></li>
                </div>
                </ul>
        </li>
        <li>
            <a href="#" class="other">Accessories</a>
                <ul class="dropdown">
                    <li><a href="items/a_tempered.php">Tempered Glass</a></li>
                    <li><a href="items/a_backcover.php">Back Cover</a></li>
                    <li><a href="items/a_airpods.php">Airpods</a></li>
                    <li><a href="items/a_charger.php">Charger</a></li>
                    <li><a href="items/a_headset.php">Headset</a></li>
                    <li><a href="items/a_powerbank.php">Power bank</a></li>
                </ul>
        </li>
        <li><a href="n_contact.php">Contact Details</a></li>
        <li><a href="n_services.php">Services</a></li>
        <li><a href="n_about.php">About Us</a></li>
    </ul>
        <div class="search">
                <input class ="srch" type="search" name="" placeholder="Type To Brand Name">
                <a href="#"> <button class="btn">Search</button></a>
        </div>
    </div>
</div>

    


    