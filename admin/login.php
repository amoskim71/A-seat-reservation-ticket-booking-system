<html>
<head>
<title>unique transport company</title>
<link href="astyle.css" rel="stylesheet"/>
</head>
<body>
<div class="wrapper">



<div class="content">
<!--content here-->
<?php
include ('db.php');
/*$a="administrator";
$b="12345";
$username=$_POST['username'];
$password=$_POST['password'];
if($username==$a && $password==$b)
{
    header("location:dashboard.php");
}*/
$UserName=$_POST['username'];
$Password=$_POST['password'];

$login_query=mysql_query("select * from users where username='$UserName' and password='$Password'");

$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);


if ($count > 0){

/* set the session */
session_start();
$_SESSION['currentuser']=$row['username'];
header('location:dashboard.php');
}

else{
   echo '<script language="javascript" type="text/javascript"> alert("Invalid Username or Password");</script>';
echo '<script language="javascript" type="text/javascript"> window.location="index.php";</script>';

exit;
}
?>
</div>






</div>
</body>
</html>