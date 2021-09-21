<?php
session_start();
 
if(isset($_POST['submit']))
{
$con=mysql_connect("localhost","root","");
mysql_select_db("cinema",$con);
$uname=$_POST["uname"];
$pass=md5($_POST["pass"]);
$reff=$_POST["reff"];
$res=mysql_query("select name,password from users");
while($row=mysql_fetch_array($res))
{
if($row["password"]==$pass && $row["name"]==$uname)
{
	$_SESSION['uname']=$uname;
		
		if($reff=="http://localhost:8080/e-park/movies.php")
		{
			header("location:book.php");
		}
		else{
			header("location:$reff");
			}
		}
}
if($row["name"]!=$uname)
{
	echo "Username Wrong";
}

if($row["password"]!=$pass)
{
	echo "PASSWORD WRONG";
}
}
?>