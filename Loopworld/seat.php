<?php 
include("connection.php"); 
include("header.php");
 include("menu.php");
if($_SESSION['uname']==true)
{
	
}
else
{
	header('location:login.php');
}
$mgid=$_REQUEST["id"];
$res=mysql_query("select * from movies where mid='$mgid'");

?>
<div class="container">
	<div class="row">
  		<div class="col-12"> <br>
    	  <h1 class="header text-light text-center">Seats</h1>
	  	</div>
	</div>
</div>
<div class="container">
	<div class="row">
  		<div class="col-12"> <br>
    	  <h1 class="text-danger text-center">
		<?php	while($delta=mysql_fetch_array($res))
		{
			echo $delta["mname"];
		}?>
			</h1>	
	  	</div>
	</div>
</div>
<div class="container mt-5">
		<div class="row">
		    <div class="col-12">
							<div class="theatre">
  
 		 						<div class="cinema-seats left">
  				  <div class="cinema-row row-1">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

   				 <div class="cinema-row row-2">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

   				 <div class="cinema-row row-3">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-4">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-5">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-6">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-7">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
  		</div>


    								<div class="cinema-seats right">
  				  <div class="cinema-row row-1">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-2">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-3">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-4">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-5">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-6">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>

  				  <div class="cinema-row row-7">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
 			 </div>

							</div>
			</div>
		</div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
	$('.cinema-seats .seat').on('click', function() {
  $(this).toggleClass('active');
});
</script>