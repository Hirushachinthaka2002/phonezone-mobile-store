<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Samsung Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/Samsung/SamsungGalaxyzflods.png" alt="SamsungGalaxyzflods" class="table-image">
<img src="photo/Samsung/SamsungGalaxyzflip.png" alt="SamsungGalaxyzflip" class="table-image">
<img src="photo/Samsung/SamsungGalaxys24ultra.png" alt="SamsungGalaxys24ultra" class="table-image">
<img src="photo/Samsung/SamsungGalaxys24+.png" alt="SamsungGalaxys24+" class="table-image">            
<img src="photo/Samsung/SamsungGalaxys24.png" alt="SamsungGalaxys24" class="table-image">      
<img src="photo/Samsung/SamsungGalaxys23fe.png" alt="SamsungGalaxys23fe" class="table-image">
<img src="photo/Samsung/SamsungGalaxys23.png" alt="SamsungGalaxys23" class="table-image">
<img src="photo/Samsung/SamsungGalaxys22ultra5G.png" alt="SamsungGalaxys22ultra5G" class="table-image">               
<img src="photo/Samsung/SamsungGalaxys225G.png" alt="SamsungGalaxys225G" class="table-image">
<img src="photo/Samsung/SamsungGalaxys21ultra5G.png" alt="SamsungGalaxys21ultra5G" class="table-image">
<img src="photo/Samsung/SamsungGalaxys215G.png" alt="SamsungGalaxys215G" class="table-image">
<img src="photo/Samsung/SamsungGalaxya55.png" alt="SamsungGalaxya55" class="table-image">
<img src="photo/Samsung/SamsungGalaxym55.png" alt="SamsungGalaxym55" class="table-image">
<img src="photo/Samsung/SamsungGalaxym345G.png" alt="SamsungGalaxym345G" class="table-image">

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



