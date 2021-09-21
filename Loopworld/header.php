<!DOCTYPE html>
<html lang="en">
<head>
<title>Maxus Cinema</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	 <link rel="stylesheet" href="css/swiper.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/div_hover.css" rel="stylesheet" type="text/css">
	<link href="css/seats.css" rel="stylesheet" type="text/css">
<!-- banner-slider -->
<link href="css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- font-awesome icons -->

<!-- //font-awesome icons -->
<!-- js --><script type="text/javascript" src="bootstrap.js"></script>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //js -->
	<script type="text/javascript">
		$(window).on('scroll',function(){
			if($(window).scrollTop()){
				$('nav').addClass('dark1');
			}
			else
			{
				$('nav').removeClass('dark1');
			}
		})
	</script>
	
</head>
	
<body>
<!-- header -->

<nav class="navbar navbar-expand-md sticky-top">
    <a href="index.php" class="navbar-brand"><img src="logo.png" height="120" width="130" 
    style="margin-left: 50px;" class="img-fluid"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse" style="margin-top: 80px;">
        
            </div>
        </div>
        <form class="form-inline" style="margin-right: 300px;">
            <div class="input-group" style="margin-bottom:-14px;">                    
                <input type="text" class="form-control text-center" placeholder="Search" style="border-radius: 5px; width: 400px;">
                <div class="input-group-append" style="margin-left: 15px;">
                    <button type="button" class="btn btn-outline-danger text-light" style="border-radius: 5px; width: 80px;">Go<i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="navbar-nav">
        <?php error_reporting("E_ALL");
			session_start();
			   if($_SESSION["uname"]!="")
			   {?>
               <a href="logout.php" class="nav-item nav-link btn  mr-5  btn btn-outline-danger text-light" 
            style="margin-top: 10px; width: 80px;">LogOut</a>
               <?php }
			   else
			   {?>
				   <a href="login.php" class="nav-item nav-link btn  mr-5  btn btn-outline-danger text-light" 
            style="margin-top: 10px; width: 80px;">Login</a>
            <?php }?>
        </div>
    </div>
</nav>
    <!-- //header -->

