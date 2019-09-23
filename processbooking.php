<?php
$a="Traveling from....";
$b="0";
//$c="";
$travelingfrom=$_POST['travelingfrom'];
$travelingto=$_POST['travelingto'];
$date=$_POST['date'];
if($travelingfrom == $a || $travelingto == $b || empty($date))
{
    header("location:index.php");
}
else{
    
    header("location:bookareservation.php");
}
?>