<?php
include_once 'header.php';
?>

<div class="profile">
    <h1>Hello <?php
                if (isset($_SESSION['userfname'])) {
                    echo $_SESSION['userfname'];
                } else {
                    echo 'user ';
                }
                ?>

    </h1>
    <h2>Your Oder Details</h2>
</div>
<br>
<?php

require_once 'includes/detabase.inc.php';
require_once 'includes/functions.inc.php';




// session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit;
}

$userId = $_SESSION['userid'];

$stmt = $conn->prepare("SELECT * FROM orders WHERE userUid = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

// Fetch all rows into an array
$orders = [];
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}
$stmt->close();

// Reverse the order of the rows
$orders = array_reverse($orders);
?>

<div class="orders">
<?php if (!empty($orders)): ?>

    <?php foreach ($orders as $order): ?>
        <div class="box-container_order">
            <div class="box_order">
                <?php echo "<p>Ordered Date: " . htmlspecialchars($order['orderedDate']) . "</p><br>"; ?>
                <?php echo "<p>Your Daitals</p>"; ?>
                <ul class="o" type="circle">
                    <li><?php echo "<p>Name     : " . htmlspecialchars($order['usersName']) . "</p>"; ?></li>
                    <li><?php echo "<p>Country  : " . htmlspecialchars($order['usersCountry']) . "</p>"; ?></li>
                    <li><?php echo "<p>Address  : " . htmlspecialchars($order['usersAddress']) . "</p>"; ?></li>
                    <li><?php echo "<p>Post Code: " . htmlspecialchars($order['usersPcode']) . "</p>"; ?></li>
                    <li><?php echo "<p>Email    : " . htmlspecialchars($order['usersEmail']) . "</p>"; ?></li>
                    <li><?php echo "<p>Number   : " . htmlspecialchars($order['usersCnum']) . "</p><br>"; ?></li>
                </ul>
                <?php echo "<p>Your Order</p>"; ?>
                <ul class="o">
                    <li><?php echo "<p>Type   : " . htmlspecialchars($order['brandType']) . "</p>"; ?></li>
                    <li><?php echo "<p>Colour : " . htmlspecialchars($order['brandColour']) . "</p>"; ?></li>
                    <li><?php echo "<p>Storage: " . htmlspecialchars($order['brandStorage']) . "</p><br><br>"; ?></li>
                </ul>
                <div class="order-status">
                    <h3><?php if($order['status']=='pending'){
                        echo 'Pending Order';
                    }else{
                        echo 'Order Received';
                    }
                     ?></h3>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No orders found.</p>
<?php endif; ?>
</div>


<?php
include_once 'footer.php';
?>