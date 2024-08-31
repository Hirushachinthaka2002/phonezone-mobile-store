<?php
    include_once 'i_header.php';
?>

<div class="torder">
<h2>Power Bank</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite items, book your order today and pay on receipt of your items. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/powerbank/anker20000mAh.png" alt="anker20000mAh" class="item-image">
<img src="photo/powerbank/ankerportable20000mAh.png" alt="ankerportable20000mAh" class="item-image">
<img src="photo/powerbank/ankerpowercore.png" alt="ankerpowercore" class="item-image">
<img src="photo/powerbank/aspor10000mAh.png" alt="aspor10000mAh" class="item-image">            
<img src="photo/powerbank/aspor20000mAh.png" alt="aspor20000mAh" class="item-image">      
<img src="photo/powerbank/aspora323.png" alt="aspora323" class="item-image">
<img src="photo/powerbank/baseusstar.png" alt="baseusstar" class="item-image">
<img src="photo/powerbank/dudaok13.png" alt="dudaok13" class="item-image">               
<img src="photo/powerbank/samsung10000mAh.png" alt="samsung10000mAh" class="item-image">
<img src="photo/powerbank/xiaomi10000mAh.png" alt="xiaomi10000mAh" class="item-image">
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




