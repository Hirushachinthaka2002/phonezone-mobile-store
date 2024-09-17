<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>I Phone Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

    
<div class="phone" data-model="iphone">
<a href="../order/orders.php?phonemodel=iphone15promax"><img src="photo/iPhone/iPhone15ProMax.png" alt="iPhone15ProMax" class="table-image" ></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone15Pro.png" alt="iPhone15Pro" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone15Plus.png" alt="iPhone15Plus" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone15.png" alt="iPhone15" class="table-image"></a>            
<a href="../order/orders.php"><img src="photo/iPhone/iPhone14ProMax.png" alt="iPhone14ProMax" class="table-image"></a>      
<a href="../order/orders.php"><img src="photo/iPhone/iPhone14Pro.png" alt="iPhone14Pro" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone14Plus.png" alt="iPhone14Plus" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone14.png" alt="iPhone14" class="table-image"></a>     
<a href="../order/orders.php"><img src="photo/iPhone/iPhoneSE3rd.png" alt="iPhoneSE3rd" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhoneSE2nd.png" alt="iPhoneSE2nd" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone13ProMax.png" alt="iPhone13ProMax" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone13Pro.png" alt="iPhone13Pro" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone13mini.png" alt="iPhone13mini" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone13.png" alt="iPhone13" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone12ProMax.png" alt="iPhone12ProMax" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone12Pro.png" alt="iPhone12Pro" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone12.png" alt="iPhone12" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone11ProMax.png" alt="iPhone11ProMax" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone11Pro.png" alt="iPhone11Pro" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone11.png" alt="iPhone11" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhoneXSMax.png" alt="iPhoneXSMax" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhoneXR.png" alt="iPhoneXR" class="table-image"></a>
<a href="../order/orders.php"><img src="photo/iPhone/iPhone8Plus.png" alt="iPhone8Plus" class="table-image"></a>
</div>

     
<script>
        document.querySelectorAll('.table-image').forEach(image => {
            image.addEventListener('click', function() {
                <?php if (isset($_SESSION['useruid'])): ?>
                const phoneModel = this.parentElement.getAttribute('data-model');
                window.location.href = `../order/orders.php?phone=${encodeURIComponent(phoneModel)}`;
                <?php else: ?>
                window.location.href = '../login.php';
                <?php endif; ?>
            });
        });
</script>


<?php 
    include_once 'b_footer.php';
?>



