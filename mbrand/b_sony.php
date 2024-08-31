<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Sony Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/sony/sonyxperia1II.png" alt="sonyxperia1II" class="table-image">
<img src="photo/sony/sonyxperia1IV.png" alt="sonyxperia1IV" class="table-image">
<img src="photo/sony/sonyxperia1V.png" alt="sonyxperia1V" class="table-image">
<img src="photo/sony/sonyxperia1VI.png" alt="sonyxperia1VI" class="table-image">            
<img src="photo/sony/sonyxperia5IV.png" alt="sonyxperia5IV" class="table-image">      
<img src="photo/sony/sonyxperia5V.png" alt="sonyxperia5V" class="table-image">
<img src="photo/sony/sonyxperia10IV.png" alt="sonyxperia10IV" class="table-image">
<img src="photo/sony/sonyxperia10V.png" alt="sonyxperia10V" class="table-image">               
<img src="photo/sony/sonyxperia10VI.png" alt="sonyxperia10VI" class="table-image">
<img src="photo/sony/sonyxperiapro1.png" alt="sonyxperiapro1" class="table-image">
</div></a>
     
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