<?php
    include_once 'i_header.php';
?>

<div class="torder">
<h2>Chargers</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite items, book your order today and pay on receipt of your items. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/chargers/AppleMagSafeCharger.png" alt="AppleMagSafeCharger" class="item-image">
<img src="photo/chargers/chargerldnio.png" alt="chargerldnio" class="item-image">
<img src="photo/chargers/iphoneCharger.png" alt="iphoneCharger" class="item-image">
<img src="photo/chargers/samsungChargertypeC.png" alt="samsungChargertypeC" class="item-image">            
<img src="photo/chargers/wiwucharger.png" alt="wiwucharger" class="item-image">      
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




