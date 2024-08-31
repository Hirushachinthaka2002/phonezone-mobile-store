<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Realme Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>
 
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/realme/Realme6i.png" alt="Realme6i" class="table-image">
<img src="photo/realme/Realme7.png" alt="Realme7" class="table-image">
<img src="photo/realme/Realme8.png" alt="Realme8" class="table-image">
<img src="photo/realme/RealmeC11.png" alt="RealmeC11" class="table-image">            
<img src="photo/realme/RealmeC12.png" alt="RealmeC12" class="table-image">      
<img src="photo/realme/RealmeC15.png" alt="RealmeC15" class="table-image">
<img src="photo/realme/RealmeC20.png" alt="RealmeC20" class="table-image">
<img src="photo/realme/RealmeC30s.png" alt="RealmeC30s" class="table-image">               
<img src="photo/realme/RealmeC51.png" alt="RealmeC51" class="table-image">
<img src="photo/realme/RealmeC53.png" alt="RealmeC53" class="table-image">
<img src="photo/realme/RealmeC55.png" alt="RealmeC55" class="table-image">
<img src="photo/realme/RealmeX50pro.png" alt="RealmeX50pro" class="table-image">
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




