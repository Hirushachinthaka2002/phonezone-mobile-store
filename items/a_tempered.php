<?php
    include_once 'i_header.php';
?>

<div class="torder">
<h2>Tempered Glass</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite items, book your order today and pay on receipt of your items. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/Tempered_Glass/iPhone13.png" alt="iPhone13" class="item-image">
<img src="photo/Tempered_Glass/iPhone13pro.png" alt="iPhone13pro" class="item-image">
<img src="photo/Tempered_Glass/iPhone13promax.png" alt="iPhone13promax" class="item-image">
<img src="photo/Tempered_Glass/iPhone14.png" alt="iPhone14" class="item-image">            
<img src="photo/Tempered_Glass/iPhone14plus.png" alt="iPhone14plus" class="item-image">      
<img src="photo/Tempered_Glass/iPhone14pro.png" alt="iPhone14pro" class="item-image">
<img src="photo/Tempered_Glass/iPhone14promax.png" alt="iPhone14promax" class="item-image">
<img src="photo/Tempered_Glass/oneplus7pro.png" alt="oneplus7pro" class="item-image">               
<img src="photo/Tempered_Glass/oneplus7T.png" alt="oneplus7T" class="item-image">
<img src="photo/Tempered_Glass/oneplus8pro.png" alt="oneplus8pro" class="item-image">
<img src="photo/Tempered_Glass/oneplus9.png" alt="oneplus9" class="item-image">
<img src="photo/Tempered_Glass/oneplus9R.png" alt="oneplus9R" class="item-image">
<img src="photo/Tempered_Glass/SamsungGalaxyA55.png" alt="SamsungGalaxyA55" class="item-image">
<img src="photo/Tempered_Glass/SamsungGalaxyS20ultra.png" alt="SamsungGalaxyS20ultra" class="item-image">
<img src="photo/Tempered_Glass/SamsungGalaxyS21.png" alt="SamsungGalaxyS21" class="item-image">
<img src="photo/Tempered_Glass/SamsungGalaxyS23.png" alt="SamsungGalaxyS23" class="item-image">
<img src="photo/Tempered_Glass/SamsungGalaxyS23Ultra.png" alt="SamsungGalaxyS23Ultra" class="item-image">
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




