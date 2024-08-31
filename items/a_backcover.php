<?php
    include_once 'i_header.php';
?>

<div class="torder">
<h2>Back Cover</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite items, book your order today and pay on receipt of your items. Stocks are limited so hurryup.</p><br>
</div>
    
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/Back_Cover/iPhone12case.png" alt="iPhone12case" class="item-image">
<img src="photo/Back_Cover/iPhone12case2.png" alt="iPhone12case2" class="item-image">
<img src="photo/Back_Cover/iPhone13case.png" alt="iPhone13case" class="item-image">
<img src="photo/Back_Cover/iPhone14case.png" alt="iPhone14case" class="item-image">            
<img src="photo/Back_Cover/iPhone14procase.png" alt="iPhone14procase" class="item-image">      
<img src="photo/Back_Cover/iPhone14promaxcase.png" alt="iPhone14promaxcase" class="item-image">
<img src="photo/Back_Cover/iPhone14promaxcase2.png" alt="iPhone14promaxcase2" class="item-image">
<img src="photo/Back_Cover/SamsungGalaxyNote20UltraCase.png" alt="SamsungGalaxyNote20UltraCase" class="item-image">               
<img src="photo/Back_Cover/SamsungGalaxyNote20UltraCase2.png" alt="SamsungGalaxyNote20UltraCase2" class="item-image">
<img src="photo/Back_Cover/SamsungGalaxyS20Pluscase.png" alt="SamsungGalaxyS20Pluscase" class="item-image">
<img src="photo/Back_Cover/SamsungGalaxyS23Ultracase2.png" alt="SamsungGalaxyS23Ultracase2" class="item-image">
<img src="photo/Back_Cover/SamsungGalaxyS23Ultracase.png" alt="SamsungGalaxyS23Ultracase" class="item-image">
<img src="photo/Back_Cover/SamsungGalaxyZFlipcase.png" alt="SamsungGalaxyZFlipcase" class="item-image">
<img src="photo/Back_Cover/SamsungGalaxyZfoldscase.png" alt="SamsungGalaxyZfoldscase" class="item-image">
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




