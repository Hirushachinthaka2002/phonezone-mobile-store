<?php
include_once 'header.php';

require_once 'includes/detabase.inc.php';

$htmlItems = '';

if (isset($_GET['search'])) {
    $searchvalue = $_GET['search-value'];
    echo $searchvalue;

    $sqlItems = "SELECT * FROM items WHERE itemsName LIKE '%$searchvalue%'";
    $sqlAcessories = "SELECT * FROM assessories WHERE accesDescription LIKE '%$searchvalue%'";

    $resultItems = mysqli_query($conn, $sqlItems);
    $resultAcessories = mysqli_query($conn, $sqlAcessories);

    if (mysqli_num_rows($resultItems) > 0) {
        while ($row = mysqli_fetch_assoc($resultItems)) {
            echo $row['itemsId'];
            $htmlItems .= ' <div class="product-card">
                                <img src="./mbrand' . htmlspecialchars($row['pPhoto']) . '" alt="' . htmlspecialchars($row['itemsName']) . '" class="product-image">
                                <h2>' . htmlspecialchars($row['itemsName']) . '</h2>
                                <ul class="features">
                                    <li>Display Size: ' . htmlspecialchars($row['dSize']) . '</li>
                                    <li>Camera: ' . htmlspecialchars($row['pCamera']) . '</li>
                                    <li>Battery Health: ' . htmlspecialchars($row['bHealth']) . '</li>
                                    <li>Storage: ' . htmlspecialchars($row['pStorage']) . '</li><br>
                                    <li>RAM: ' . htmlspecialchars($row['pRam']) . '</li>
                                </ul>
                                <p class="price-range">Price Range: <span>' . htmlspecialchars($row['priceRange']) . '</span></p>
                                <!-- "Order Now" button -->
                                <a href="javascript:void(0);" class="order-btn" onclick="orderNow(\'' . htmlspecialchars($row['itemsName']) .'\')">ORDER NOW</a>

                            </div>';
        }

        $htmlItems .= '
        <script>
                        function orderNow(model) {
                            ' . (isset($_SESSION['useruid']) ?
            'window.location.href = "./order/orders.php?phonemodel=" + encodeURIComponent(model);' :
            'window.location.href = "./login.php";') . '
                        }
                        </script>';
    }

    if (mysqli_num_rows($resultAcessories) > 0) {
        while ($row = mysqli_fetch_assoc($resultAcessories)) {
            echo $row['accesId'];
            $htmlItems .= ' <div class="product-card">
            <img src="./items' . htmlspecialchars($row['accesPhoto']) . '" alt="' . htmlspecialchars($row['accesName']) . '" class="product-image">
            <h2>' . htmlspecialchars($row['accesName']) . '</h2>
            <ul class="features">
                <li>' . htmlspecialchars($row['accesDescription']) . '</li>
            </ul>
            <p class="price-range">Price :' . htmlspecialchars($row['accesPrice']) . '</p>
            <!-- "Order Now" button -->
            <a href="javascript:void(0);" class="order-btn" onclick="orderNow(\'' . htmlspecialchars($row['accesDescription']) .'\')">ORDER NOW</a>

        </div>';
        }

        $htmlItems .= '<script>
                    function orderNow(model) {
                        ' . (isset($_SESSION['useruid']) ?
                            'window.location.href = "./order/orders.php?phonemodel=" + encodeURIComponent(model);' :
                            'window.location.href = "./login.php";') . '
                                }
                    </script>';
        
    }
}



?>

<div class="card-main">
    <?php echo $htmlItems ?>
</div>

<?php
include_once 'footer.php';
?>