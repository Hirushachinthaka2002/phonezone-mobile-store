<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Infinix Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="/photo/Infinix/Infinix_GT_10_Pro.png" alt="Infinix_GT_10_Pro" class="table-image">
<img src="photo/Infinix/Infinix_GT_20_Pro.png" alt="Infinix_GT_20_Pro" class="table-image">
<img src="photo/Infinix/Infinix_Hot_30_5G.png" alt="Infinix_Hot_30_5G" class="table-image">            
<img src="photo/Infinix/Infinix_Note_40_5G.png" alt="Infinix_Note_40_5G" class="table-image">      
<img src="photo/Infinix/infinix_note_40_pro+.png" alt="infinix_note_40_pro+" class="table-image">
<img src="photo/Infinix/Infinix_Smart_8_HD.png" alt="Infinix_Smart_8_HD" class="table-image">
<img src="photo/Infinix/Infinix_Smart_8_Plus.png" alt="Infinix_Smart_8_Plus" class="table-image">               
<img src="photo/Infinix/Infinix_Smart_8_Pro.png" alt="Infinix_Smart_8_Pro" class="table-image">
<img src="photo/Infinix/infinix_zero_30_4g.png" alt="infinix_zero_30_4g" class="table-image">
<img src="photo/Infinix/Infinix_Hot_40_Pro.png" alt="Infinix_Hot_40_Pro" class="table-image">
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




