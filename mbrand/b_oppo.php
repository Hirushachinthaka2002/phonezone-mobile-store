<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Oppo Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>
 
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/oppo/OppoA15.png" alt="OppoA15" class="table-image">
<img src="photo/oppo/OppoA17.png" alt="OppoA17" class="table-image">
<img src="photo/oppo/OppoA17k.png" alt="OppoA17k" class="table-image">
<img src="photo/oppo/OppoA18.png" alt="OppoA18" class="table-image">            
<img src="photo/oppo/OppoA38.png" alt="OppoA38" class="table-image">      
<img src="photo/oppo/OppoA58.png" alt="OppoA58" class="table-image">
<img src="photo/oppo/OppoA77s.png" alt="OppoA77s" class="table-image">
<img src="photo/oppo/OppoF11.png" alt="OppoF11" class="table-image">               
<img src="photo/oppo/OppoF17.png" alt="OppoF17" class="table-image">
<img src="photo/oppo/OppoA78.png" alt="OppoA78" class="table-image">
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



