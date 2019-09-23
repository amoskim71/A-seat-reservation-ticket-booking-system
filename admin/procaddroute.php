<?php
include('../db.php');

//handle first form - adding new origin
if (isset($_POST['Origin'])){

$org=$_POST['neworigin'];

$res=mysql_query("INSERT INTO origin (origin)
VALUES
('$org')");
header("location: addroute.php");

}




//handle second form - adding new destination
if (isset($_POST['Destination'])){

$orgid=$_POST['originid'];
$dest=$_POST['destination'];

$res=mysql_query("INSERT INTO destination (originid, destination)
VALUES
('$orgid','$dest')");
header("location: addroute.php");

}








//handle third form - adding route details

if (isset($_POST['RouteDetails'])){

$type=$_POST['type'];
$route=$_POST['route'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$update=mysql_query("INSERT INTO route (type, price, numseats, route, time)
VALUES
('$type','$price','$seat','$route','$time')");
header("location: route.php");

}
?>
