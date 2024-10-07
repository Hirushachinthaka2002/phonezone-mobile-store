<?php
    include_once 'header.php';
?>

<div class="hcontent">
    <h1 >Hello <?php 
    if (isset($_SESSION ['useruid'])){
        echo $_SESSION ['useruid'];
    }else{
        echo 'New Customer';
    }
    ?></h1>

    <?php
        if (isset($_SESSION ['useruid'])){
            echo '<h3>Welcome to our phone zone<br>online mobile phone store</h3><br>';
            echo '<p>Choose your favorite smartphone,<br> book your order today and pay on receipt of your phone.<br> Stocks are limited so hurry.<br>
                    You are already logged in to our website.<br>If you want to order mobile phone or accessories,<br> send us your selection. <br>We will deliver your order to you in confidence.<br> Payment can be made after receiving your order.<br> For more details call <br>our phone numbers and get details.</p>';
                
        }else{
            echo '<h3>Welcome to our phone zone<br>online mobile phone store</h3><br>';
            echo '<p>Choose your favorite smartphone,<br> book your order today and pay on receipt of your phone.<br> Stocks are limited so hurry.<br>
                If you want to order,<br> you must be logged in to our website.<br>No need if you are already logged in.</p>';
            echo '<button class="cn"><a href="login.php">Customer Login</a></button>';  
        }
    ?>
</div>

    <div class="image-container">
            <img src="photo/offer1.png" class="image image1" alt="Image 1">
            <img src="photo/offer2.png" class="image image2" alt="Image 2">
            <img src="photo/offer3.png" class="image image3" alt="Image 3">
            <img src="photo/offer4.png" class="image image4" alt="Image 4">
    </div>

    <div class="box-container">
        <div class="box">
            <img src="photo/warranty.png" alt="warranty Logo" class="logo">
            <p class="box-text">WARRANTY ASSURED<br><br>
            In case of faulty products, we have an upstanding warranty and claim procedures to make sure that your requirements are met in minimum time loss as possible.</p>
        </div>
        <div class="box">
            <img src="photo/setting.png" alt="setting Logo" class="logo">
            <p class="box-text">CUSTOM ORDERS<br><br>
            In case your requirements supersedes what the local market has to offer, we will provide you with assistance to meet these requirements</p>
        </div>
        <div class="box">
            <img src="photo/truck.jpg" alt="track Logo" class="logo">
            <p class="box-text">HOME DELIVERY<br><br>
            To further facilitate your access to your needs, we offer to deliver to meet your requirements straight to where you live within Sri Lankan borders.</p>
        </div>
    </div>

<?php 
    include_once 'footer.php';
?>