<html>
<link href="style.css" rel="stylesheet" type="text/css"> 
<body>


<div class="reg-form form login">
<form action="loginq.php" method="post">
<?php $ref=@$_SERVER[HTTP_REFERER]; ?> 
<h1>Login</h1>
<input class="in" type="text" name="uname" placeholder="Username">
<input class="in" type="password" name="pass" placeholder="Password">
<input type="hidden" name="reff" value="<?php echo $ref; ?>">
<input type="submit" class="btn" name="submit" value="Log In">

</form>
<h4>Not Registered?</h4> <a href="reg.php">Sign up</a></div>

</body>
</html>

