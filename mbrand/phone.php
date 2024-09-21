<?php
    include_once 'b_header.php';
?>



<?php


require_once './brand_db.php';

if (isset($_GET['brand'])) {
    $brand = $_GET['brand'];

   
    $sql = "SELECT * FROM items WHERE brand = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $brand);
    $stmt->execute();
    $result = $stmt->get_result();
?>

    <div class="torder">
        <h2><?php echo htmlspecialchars($brand); ?> Smart Phone</h2>
        <h5>Current Stock</h5>
        <br>
        <p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
    </div>

    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            $model = $row['itemsName'];
            $display = $row['dSize'];
            $camera = $row['pCamera'];
            $battery = $row['bHealth'];
            $storage = $row['pStorage'];
            $ram = $row['pRam'];
            $price_range = $row['priceRange'];
            $image_url = $row['pPhoto'];
    ?>


        <div class="card-main">
        <div class="product-card">
            <img src="<?php echo htmlspecialchars($image_url); ?>" alt="<?php echo htmlspecialchars($model); ?>" class="product-image">
            <h2><?php echo htmlspecialchars($model); ?></h2>
            <ul class="features">
                <li>Display Size: <?php echo htmlspecialchars($display); ?></li>
                <li>Camera: <?php echo htmlspecialchars($camera); ?></li>
                <li>Battery Health: <?php echo htmlspecialchars($battery); ?></li>
                <li>Storage: <?php echo htmlspecialchars($storage); ?></li><br>
                <li>RAM: <?php echo htmlspecialchars($ram); ?></li>
            </ul>
            <p class="price-range">Price Range: <span><?php echo htmlspecialchars($price_range); ?></span></p>
            <!-- "Order Now" button -->
            <a href="javascript:void(0);" class="order-btn" onclick="orderNow('<?php echo htmlspecialchars($model); ?>')">ORDER NOW</a>
        </div>
        </div>
        </div>
    <?php
            }
        } else {
            echo "No products found for $brand.";
        }
        } else {
            echo "No brand selected.";
        }

    $conn->close();
    ?>
        
     
        <script>
            function orderNow(model) {
                <?php if (isset($_SESSION['useruid'])): ?>
                    window.location.href = `../order/orders.php?phone=${encodeURIComponent(model)}`;
                <?php else: ?>
                    window.location.href = '../login.php';
                <?php endif; ?>
            }
        </script>


<?php 
    include_once 'b_footer.php';
?>



