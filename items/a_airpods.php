<?php
    include_once 'i_header.php';
?>

<div class="torder">
<h2>Airpods</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite items, book your order today and pay on receipt of your items. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/airpods/airpodsh1processor.png" alt="airpodsh1processor" class="item-image">
<img src="photo/airpods/airpods3rdgeneration.png" alt="airpods3rdgeneration" class="item-image">
<img src="photo/airpods/airpods2ndgeneration.png" alt="airpods2ndgeneration" class="item-image">
<img src="photo/airpods/airpods2ndb288ap.png" alt="airpods2ndb288ap" class="item-image">            
<img src="photo/airpods/airpods1stgeneration.png" alt="airpods1stgeneration" class="item-image">      
</div></a>
     
<script>
        document.querySelectorAll('.item-image').forEach(image => {
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
    include_once 'i_footer.php';
?>




