<?php
    include_once 'admin_header.php';
?>

<h3>Welcome to our phone zone<br>online mobile phone store</h3><br>

<?php

require_once './admin_db.php';

if(isset($_POST['order-status'])){ 
    $orderID = $_POST['order-id'];

    $sql = "UPDATE orders SET status='confirmed' WHERE ordersid = $orderID";
    mysqli_query($conn,$sql);
    echo("<meta http-equiv='refresh' content='1'>");

}

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Start table and headers
    echo "<table>";
    echo "<tr>
            <th>Order ID</th> 
            <th>Customer Name</th>
            <th>Country</th>
            <th>Address</th>
            <th>Post Code</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Brand Type</th>
            <th>Colour</th>
            <th>Storage</th>
            <th>Ordered Date</th>
            <th>Comform Orders</th>
          </tr>";

    // Loop through and output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ordersId"] . "</td>";
        echo "<td>" . $row["usersName"] . "</td>";
        echo "<td>" . $row["usersCountry"] . "</td>";
        echo "<td>" . $row["usersAddress"] . "</td>";
        echo "<td>" . $row["usersPcode"] . "</td>";
        echo "<td>" . $row["usersEmail"] . "</td>";
        echo "<td>" . $row["usersCnum"] . "</td>";
        echo "<td>" . $row["brandType"] . "</td>";
        echo "<td>" . $row["brandColour"] . "</td>";
        echo "<td>" . $row["brandStorage"] . "</td>";
        echo "<td>" . $row["orderedDate"] . "</td>";
        if($row["status"]=='pending'){
            echo "<td>
            <form action='admin_user.php' method='post'>
                <input type='hidden' name='order-id' value=". $row["ordersId"] . ">
                <button type='submit' name='order-status'class='btno'>Pending</button>
            </form>
        </td>";
        }else{
            echo "<td>Order Confirmed</td>";
        }
        
        echo "</tr>";
    }

    // End table
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>



</body>
</html>

