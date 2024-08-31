<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Honor Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/honor/honor90.png" alt="honor90" class="table-image">
<img src="photo/honor/honor90lite.png" alt="honor90lite" class="table-image">
<img src="photo/honor/honor200pro.png" alt="honor200pro" class="table-image">
<img src="photo/honor/honormagic6pro.png" alt="honormagic6pro" class="table-image">            
<img src="photo/honor/honormagicV2.png" alt="honormagicV2" class="table-image">      
<img src="photo/honor/honorx6a.png" alt="honorx6a" class="table-image">
<img src="photo/honor/honorx7a.png" alt="honorx7a" class="table-image">
<img src="photo/honor/honorx8a.png" alt="honorx8a" class="table-image">               
<img src="photo/honor/honorX9b.png" alt="honorX9b" class="table-image">
<img src="photo/honor/honorx50.png" alt="honorx50" class="table-image">
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



