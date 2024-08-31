<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Google Pixel Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/pixel/pixel8a.png" alt="pixel8a" class="table-image">
<img src="photo/pixel/pixel8pro.png" alt="pixel8pro" class="table-image">
<img src="photo/pixel/pixel8.png" alt="pixel8" class="table-image">
<img src="photo/pixel/pixelfold.png" alt="pixelfold" class="table-image">            
<img src="photo/pixel/pixel7a.png" alt="pixel7a" class="table-image">      
<img src="photo/pixel/pixel7pro.png" alt="pixel7pro" class="table-image">
<img src="photo/pixel/pixel7.png" alt="pixel7" class="table-image">
<img src="photo/pixel/pixel6a.png" alt="pixel6a" class="table-image">               
<img src="photo/pixel/pixel6pro.png" alt="pixel6pro" class="table-image">
<img src="photo/pixel/pixel6.png" alt="pixel6" class="table-image">
<img src="photo/pixel/pixel5a.png" alt="pixel5a" class="table-image">
<img src="photo/pixel/pixel5.png" alt="pixel5" class="table-image">
<img src="photo/pixel/pixel4xl.png" alt="pixel4xl" class="table-image">
<img src="photo/pixel/pixel4a5G.png" alt="pixel4a5G" class="table-image">
<img src="photo/pixel/pixel4a.png" alt="pixel4a" class="table-image">
<img src="photo/pixel/pixel4.png" alt="pixel4" class="table-image">
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




