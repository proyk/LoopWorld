<html>
<head>

<link  rel="stylesheet" href="style.css">

</head>
<body>



<div class="form reg-form">
<form action="" method="post">
 
<h1> Registration</h1>
<input type="text"  placeholder="User Name" name="uname" class="in" />
<span id="messages"> </span><br><br>
<input type="text" placeholder="Email" name="email" class="in"/><br><br>
<input type="text" placeholder="Mobile" name="mobile" class="in" /><br><br>
<input type="password" placeholder="Password" name="pass" class="in"/><br><br>
<select>
<option>Security Question</option>
<option>First choice</option>
<option>Second choice</option>
</select><br><br>
<input  type="text" name="ans" placeholder="Answer" class="in"><br><br>

<input type="submit" name="reg" value="Register" class="btn">

<h4> Already Registered?</h4> <a href="login.php">Login</a>
</form>
 </div>


</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die("dtatabase not connected");
$db=mysql_select_db("cinema",$con);

if(isset($_POST["reg"]))
{
	$username=$_POST["uname"];
	$mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$pass=md5($_POST["pass"]);
	$sq=$_POST["ans"];

$q="insert into users values('$username','$mobile','$email','$pass','$sq')";
$result=mysql_query($q,$con);

if(mysql_affected_rows()>0)
{
	header('location:login.php');
}
else
{
	echo "not inserted";
}}
?>