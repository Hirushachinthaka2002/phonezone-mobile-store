<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Redmi Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/redmi/RedmiA2+.png" alt="RedmiA2+" class="table-image">
<img src="photo/redmi/RedmiA3.png" alt="RedmiA3" class="table-image">
<img src="photo/redmi/Redmi12.png" alt="Redmi12" class="table-image">
<img src="photo/redmi/Redmi12c.png" alt="Redmi12c" class="table-image">            
<img src="photo/redmi/Redmi13c.png" alt="Redmi13c" class="table-image">      
<img src="photo/redmi/Redminote12.png" alt="Redminote12" class="table-image">
<img src="photo/redmi/Redminote12pro.png" alt="Redminote12pro" class="table-image">
<img src="photo/redmi/Redminote13.png" alt="Redminote13" class="table-image">               
<img src="photo/redmi/Redminote13pro.png" alt="Redminote13pro" class="table-image">
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




