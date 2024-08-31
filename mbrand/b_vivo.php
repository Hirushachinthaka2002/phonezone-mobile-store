<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Vivo Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/vivo/VivoY02.png" alt="VivoY02" class="table-image">
<img src="photo/vivo/VivoY02t.png" alt="VivoY02t" class="table-image">
<img src="photo/vivo/VivoY03.png" alt="VivoY03" class="table-image">
<img src="photo/vivo/VivoY16.png" alt="VivoY16" class="table-image">            
<img src="photo/vivo/VivoY17s.png" alt="VivoY17s" class="table-image">      
<img src="photo/vivo/VivoY27s.png" alt="VivoY27s" class="table-image">
<img src="photo/vivo/VivoY30.png" alt="VivoY30" class="table-image">
<img src="photo/vivo/VivoY36.png" alt="VivoY36" class="table-image">               
<img src="photo/vivo/VivoY53s.png" alt="VivoY53s" class="table-image">
<img src="photo/vivo/VivoV29.png" alt="VivoV29" class="table-image">
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




