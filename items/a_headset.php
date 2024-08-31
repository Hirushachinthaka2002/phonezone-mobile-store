<?php
    include_once 'i_header.php';
?>

<div class="torder">
<h2>Headset</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite items, book your order today and pay on receipt of your items. Stocks are limited so hurryup.</p><br>
</div>
    
<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/headset/H_A4TechHS28iHeadphone.png" alt="H_A4TechHS28iHeadphone" class="item-image">
<img src="photo/headset/H_Lenovo100StereoAnalogueHeadset.png" alt="H_Lenovo100StereoAnalogueHeadset" class="item-image">
<img src="photo/headset/H_LenovoYogaActiveNoiseCancellationHeadphones.png" alt="H_LenovoYogaActiveNoiseCancellationHeadphones" class="item-image">
<img src="photo/headset/H_LogitechH110StereoHeadset.png" alt="H_LogitechH110StereoHeadset" class="item-image">            
<img src="photo/headset/H_LogitechH151Headset.png" alt="H_LogitechH151Headset" class="item-image">      
<img src="photo/headset/Havit_rgb_gaming_headset_6.png" alt="Havit_rgb_gaming_headset_6" class="item-image">
<img src="photo/headset/Lenovo_HD116_Wireless_Headset.png" alt="Lenovo_HD116_Wireless_Headset" class="item-image">
<img src="photo/headset/Logitech _G233_Prodigy_Wired_Gaming_Headset.png" alt="Logitech _G233_Prodigy_Wired_Gaming_Headset" class="item-image">               
<img src="photo/headset/Razer_Unveils_the_Kraken_Pro_Gaming_Headset.png" alt="Razer_Unveils_the_Kraken_Pro_Gaming_Headset" class="item-image">
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




