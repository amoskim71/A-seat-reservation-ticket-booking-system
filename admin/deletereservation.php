<?php
include ('db.php');


if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from bookareservation where bookareservationid='$id'";
mysql_query($sql);
}

header ("location: reservations.php");
?>