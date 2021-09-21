

<?php include("header.php");?>

<?php include("menu.php");?>

 <!-- Swiper -->
<?php
    include('connection.php');
    $q="SELECT `slposter` FROM `slider`";
    $re=mysql_query($q,$con);
   
?>

  <div class="container mt-2">
     <div class="swiper-container" style="overflow:visible;">
    <div class="swiper-wrapper text-center">
     <?php
    
     while ($row=mysql_fetch_array($re)) {

        ?>
      <div class="swiper-slide" style="height: 500px;width:100%;"> 
      <img src="admin/<?php echo $row["slposter"];?> " style="width:100%;height:100%;border-radius:25px;"></div>
		
    <?php
     }
     ?>
     
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
    </div>
    <div class="container bg-light mt-5">
       fajsdlkfjasdkfdisoy
    </div>

<?php include("footer.php");?>

<script>
    var swiper = new Swiper('.swiper-container', {
       autoplay:{ 
	   delay:1800,
	   disableOnInteraction: false,
	   },
	   
	  spaceBetween: 10,
      effect: 'fade',
		loop:true,
		 navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
		 },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
	  },
     
    });
  </script>

</body>
</html>