<?php
include ('db.php');


if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from feedbacks where feedbackid='$id'";
mysql_query($sql);
}

header ("location: messages.php");
?>