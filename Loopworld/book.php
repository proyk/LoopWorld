<?php
session_start();
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
 ?>

<div class="container">
<div class="row">
  <div class="col-12"> <br>
      <h1 class="header text-light text-center">Movie Details</h1>
  </div>
  <?php
   $gid=$_REQUEST["id"];
 $get_mov=mysql_query("Select * from movies where mid='$gid'",$con);
 $mdata=mysql_fetch_array($get_mov);

  ?>
 </div>
</div>
<div class="container">
	<div class="row">
       <div class="col-12">
     
   				<div class="text-light text-center"><h2 class="alert-success text-uppercase"><?php echo $mdata["mname"]; ?>
        									</h2></div>
            
 
       </div>
  </div><br />
  <div class="container">
       <div class="row">
          <div class="col-12" style="overflow:hidden">
            <img src="admin/<?php echo $mdata["mposter"]; ?>" style="width:1200px;height:575px" class="img-thumbnail"/>
          </div>
       </div>
    </div>
   </div> <br />
   <div class="container">
        <div class="row">
           <div class="col-12">
              <h3 class="text-center alert-danger">Director</h3>
              <h4 class="text-center text-light mt-2"><?php echo $mdata["mdirector"]; ?></h4>
           </div>
           <div class="col-12 mt-4">
              <h3 class="text-center alert-danger">Cast</h3>
              <h4 class="text-center text-light mt-2"><?php echo $mdata["mcast"]; ?></h4>
           </div>
            <div class="col-12 mt-4">
              <h3 class="text-center alert-danger">Description</h3>
              <h4 class="text-center text-light mt-2"><?php echo $mdata["mdesc"]; ?></h4>
           
           </div>
           <div class="col-12">
           	<div class="text-center mt-3">
        		<a href="#" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#showdata">Book Ticket</a>
                <!-- Modal -->
                			<div class="modal" id="showdata">
  									<div class="modal-dialog">
    								<div class="modal-content bg-dark">
   <?php $sdata="select * from shows where mid='$gid'";
   $sres=mysql_query($sdata,$con); ?>
   			 <!-- Modal Header -->
       				<div class="modal-header">
       				<h4 class="modal-title text-success">Show Details</h4>
       			<button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
     				 </div>

      		<!-- Modal body -->
     				 <div class="modal-body">
        				<select class="form-control bg-dark text-light">
                        <option>Select Date</option>
                        <?php while($sarr=mysql_fetch_array($sres))
						{ ?> <option><?php echo $sarr["sdate"]; ?></option><?php } ?>
                        </select><br />
                        <select class="form-control bg-dark text-light">
                        <option>Select Time</option>
                         <?php while($sarr=mysql_fetch_array($sres))
						{ ?> <option><?php echo $sarr["stime"]; ?></option><?php } ?>
                        </select>
     				 </div>

      		<!-- Modal footer -->
         		 <div class="modal-footer">
                 <div class="text-center">
                 <a href="seat.php?id=<?php echo (int)$gid; ?>" class="btn btn-outline-success">Search</a>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          			</div>

    </div>
  </div>
</div>
        	</div>
        </div>
        </div>
   </div>
  
  


<?php include("footer.php");?>
</body>
</html>