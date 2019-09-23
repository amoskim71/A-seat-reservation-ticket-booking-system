<?php
include ('session.php');
?>

<html>
<head>
<title>unique transport company</title>
<link href="astyle.css" rel="stylesheet"/>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Print Ticket</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 500px; font-size:7px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

</head>
<body>
<div class="wrapper">



<div class="content">
<!--content here-->
<div class="header">
<?php
   $date = date("M d, Y", strtotime ("+1 hour"));
   echo $date;
?>
<span class="logout">
    <a href="logout.php">log out</a></span>
</div>
<div class="container">
<div class="nav">
<!--navigation here-->
<ul>
    <a href="dashboard.php"><li>Dashboard</li></a>
    <a href="reservations.php"><li>Reservations</li></a>
    <a href="messages.php"><li>Messages</li></a>

</ul>    
</div>
<div class="primcontnt">
<!--primary content-->
<p><span  style="border:2px inset #ECF1FD; padding:10px; background-color:burlywood;"><a href="javascript:Clickheretoprint()">Print Receipt</a></span>

<?php

/*get the query string id from the view student page*/
$bkcode = $_POST ['bkingcode'];
echo '<span  style="border:2px inset #ECF1FD; padding:10px; background-color:burlywood;"><a href="reservationdetails.php?bk='.$bkcode.'">Reservation Details</a></span>
</p>';
?>
<br/>
<div id="print_content">
<img src="images/utcdraww.jpg" width="200px" height="100px"/>
<br/>
<br/>
<span align="center" style="text-decoration:underline; font-size:20px; padding-left:38px;"><b>TICKET DETAILS</b></span>

<?php
include ('db.php');

/*get the query string id from the view student page*/
$bkcode = $_POST ['bkingcode'];

/*query the database (using the select sql statement)*/
/*$result = mysql_query("select * from students where StudentID = '$id' ");*/
$result = mysql_query("select * from bookareservation where bookingcode = '$bkcode' ");

/*fetch rows from the database*/
while ($row = mysql_fetch_array($result))
{
$confirmation = $row['bookingcode'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$tel=$row['tel'];
$email=$row['email'];
$address=$row['address'];
$adults=$row['adults'];
$children=$row['children'];
$luggage=$row['luggage'];
$nextofkin=$row['nextofkin'];
$nextofkintel=$row['nextofkintel'];
$nextofkinaddress=$row['nextofkinaddress'];
} 

$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$bkcode'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['bus'];
$dt=$rows['date'];
		
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			$rt= $rowa['route'];
$ty = $rowa['type'];
			$time=$rowa['time'];
			}
}

echo '<table cellpadding="7px">';
echo '<tr>';
echo '<td>';
echo '<b>BOOKING CODE:</b>'."\t".$confirmation.'<br/>';
echo '<br/>';
echo '<b>Full Name:</b>'."\t".$firstname."\t".$lastname.'<br/>';
echo '<br/>';
echo '<b>Adults:</b>'."\t".$adults.'<br/>';
echo '<br/>';
echo '<b>Children:</b>'."\t".$children.'<br/>';
echo '<br/>';
echo '<b>Luggage(s):</b>'."\t".$luggage.'<br/>';
echo '<br/>';
echo '<b>Route:</b>'."\t".$rt.'<br/>';
echo '<br/>';
echo '<b>Time:</b>'."\t".$time.'<br/>';
echo '<br/>';
echo '<b>Date:</b>'."\t".$dt.'<br/>';
echo '<br/>';
echo '</td>';
echo '</tr>';
echo '</table>';


?>
</div>

</div>
</div>
</div>






</div>
</body>
</html>