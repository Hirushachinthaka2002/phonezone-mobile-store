<?php
    include_once 'i_header.php';
?>


<?php

require_once './access_db.php';

if (isset($_GET['accesName'])) {
    $accesName = $_GET['accesName'];

   
    $sql = "SELECT * FROM assessories WHERE accesName = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $accesName);
    $stmt->execute();
    $result = $stmt->get_result();
?>

    <div class="torder">
        <h2><?php echo htmlspecialchars($accesName); ?></h2>
        <h5>Current Stock</h5>
        <br>
        <p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
    </div>


    <div class="card-main">
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            $access = $row['accesName'];
            $description = $row['accesDescription'];
            $price = $row['accesPrice'];
            $image_url = $row['accesPhoto'];
    ?>


        
        <div class="product-card">
            <h2><?php echo htmlspecialchars($access); ?></h2>
            <img src="<?php echo htmlspecialchars($image_url); ?>" alt="<?php echo htmlspecialchars($access); ?>" class="product-image">
            <ul class="features">
                <li> <?php echo htmlspecialchars($description); ?></li>
            </ul>
            <p class="price-range">Price:<?php echo htmlspecialchars($price); ?></span></p>
    
            <a href="javascript:void(0);" class="order-btn" onclick="orderNow('<?php echo htmlspecialchars($description); ?>')">ORDER NOW</a>

        <script>
            function orderNow(description) {
                <?php if (isset($_SESSION['useruid'])): ?>
                    window.location.href = `../order/orderacess.php?type=accessories&phonemodel=${encodeURIComponent(description)}`;
                <?php else: ?>
                    window.location.href = '../login.php';
                <?php endif; ?>
            }
        </script>

        </div>
        

    <?php
            }
        } else {
            echo "No products found for $accesName";
        }
        } else {
            echo "No items selected.";
        }

    $conn->close();
    ?>
</div>      
     
        


<?php 
    include_once 'i_footer.php';
?>



