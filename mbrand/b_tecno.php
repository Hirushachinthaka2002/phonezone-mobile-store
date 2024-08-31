<?php
    include_once 'b_header.php';
?>

<div class="torder">
<h2>Tecno Samart Phone</h2>
<h5>Current Stock</h5>
<br>
<p>Choose your favorite smartphone, book your order today and pay on receipt of your phone. Stocks are limited so hurryup.</p><br>
</div>

<a href="#"><div class="phone" data-model="phoneModel">
<img src="photo/tecno/Tecno_Camon_20.png" alt="Tecno_Camon_20" class="table-image">
<img src="photo/tecno/Tecno_Camon_20s_Pro_5G.png" alt="Tecno_Camon_20s_Pro_5G" class="table-image">
<img src="photo/tecno/Tecno_Camon_30_5G .png" alt="Tecno_Camon_30_5G" class="table-image">
<img src="photo/tecno/Tecno_Camon_30_Premier.png" alt="Tecno_Camon_30_Premier" class="table-image">            
<img src="photo/tecno/Tecno_Phantom_V_Fold.png" alt="Tecno_Phantom_V_Fold" class="table-image">      
<img src="photo/tecno/Tecno_Pop_7.png" alt="Tecno_Pop_7" class="table-image">
<img src="photo/tecno/Tecno_Pova_5.png" alt="Tecno_Pova_5" class="table-image">
<img src="photo/tecno/Tecno_Pova_6_Neo.png" alt="Tecno_Pova_6_Neo" class="table-image">               
<img src="photo/tecno/Tecno_Pova_6_Pro.png" alt="Tecno_Pova_6_Pro" class="table-image">
<img src="photo/tecno/tecno_pova_neo_3.png" alt="tecno_pova_neo_3" class="table-image">
<img src="photo/tecno/Tecno_Spark_10_ 5G.png" alt="Tecno_Spark_10_ 5G" class="table-image">
<img src="photo/tecno/Tecno_Spark_10C.png" alt="Tecno_Spark_10C" class="table-image">
<img src="photo/tecno/Tecno_Spark_20.png" alt="Tecno_Spark_20" class="table-image">
<img src="photo/tecno/Tecno_Spark_20_Pro_5G.png" alt="Tecno_Spark_20_Pro_5G" class="table-image">
<img src="photo/tecno/Tecno_Spark_Go_2024.png" alt="Tecno_Spark_Go_2024" class="table-image">
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




