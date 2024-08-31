<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Huawei Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/Huawei/Huawei_Mate_60_Pro.png" alt="Huawei_Mate_60_Pro" class="table-image">
<img src="photo/Huawei/Huawei_Mate_60_RS_Ultimate.png" alt="Huawei_Mate_60_RS_Ultimate" class="table-image">
<img src="photo/Huawei/Huawei_Mate_X5.png" alt="Huawei_Mate_X5" class="table-image">
<img src="photo/Huawei/Huawei_nova_11_SE.png" alt="Huawei_nova_11_SE" class="table-image">            
<img src="photo/Huawei/Huawei_nova_12s.png" alt="Huawei_nova_12s" class="table-image">      
<img src="photo/Huawei/Huawei_nova_Y72.png" alt="Huawei_nova_Y72"class="table-image">
<img src="photo/Huawei/Huawei_P60_Pro.png" alt="Huawei_P60_Pro" class="table-image">
<img src="photo/Huawei/Huawei_Pocket_2.png" alt="Huawei_Pocket_2" class="table-image">               
<img src="photo/Huawei/Huawei_Pura_70.png" alt="Huawei_Pura_70" class="table-image">
<img src="photo/Huawei/Huawei_Pura_70_Ultra.png" alt="Huawei_Pura_70_Ultra" class="table-image">
<img src="photo/Huawei/Huaweinova12i.png" alt="Huaweinova12i" class="table-image">
<img src="photo/Huawei/Huaweinova12Ultra.png" alt="Huaweinova12Ultra" class="table-image">
<img src="photo/Huawei/HuaweinovaY91.png" alt="HuaweinovaY91" class="table-image">
<img src="photo/Huawei/HuaweiPura70Pro+.png" alt="HuaweiPura70Pro+" class="table-image">
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
?>?>




