<?php
include("connection.php"); 
include("header.php");?>
<?php include("menu.php");?>
<style>





</style>
<?php

$data="select * from movies";
$qry=mysql_query($data,$con);
?>

<div class="container">
<div class="row">
  <div class="col-12"> <br>
      <h1 class="text-light text-center">Now Showing</h1>
  </div>
</div>
</div>
<div class="container">
<div class="row">

<?php while($arr=mysql_fetch_array($qry))
{?>
<div class="col-lg-4 mt-5">
	<div class="container1">
  		<img src="admin/<?php echo $arr["mposter"]; ?>" alt="Avatar" class="image1">
  		<div class="overlay1">
   			 <div class="text1 text-center"><h3><?php echo $arr["mname"]; ?></h3></div>
             <div class="text2"><p class="text-danger">Director:</p><?php echo $arr["mdirector"]; ?>
             <p class="text-danger mt-3">Cast:</p><?php echo $arr["mcast"]; ?>
             </div>
             <div class="text-center mt-5">
             <a href="book.php?id=<?php echo $arr["mid"]; ?>" class="btn btn-outline-success">Book Now</a>
             </div>
  		</div>
	</div>
</div>
<?php } ?>

</div>
</div>


<?php include("footer.php");?>