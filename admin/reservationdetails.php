<?php
include ('session.php');
?>

<html>
<head>
<title>unique transport company</title>
<link href="astyle.css" rel="stylesheet"/>
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
<h4 align="center" style="text-decoration:underline;">RESERVATION DETAILS</h4>
<?php
include('db.php');
$confirmation = $_GET ['bk'];
$result = mysql_query("select * from bookareservation where bookingcode = '$confirmation'");

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
$payable=$row['payable'];

} 


$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$confirmation'");
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

echo '<table cellpadding="20px">';
echo '<tr>';
echo '<td>';
echo '<b>Route:</b>'."\t".$rt.'<br/>';
echo '<br/>';
echo '<b>Time:</b>'."\t".$time.'<br/>';
echo '<br/>';
echo '<b>Date:</b>'."\t".$dt.'<br/>';
echo '<br/>';
echo '<b>First Name:</b>'."\t".$firstname.'<br/>';
echo '<br/>';
echo '<b>Last Name:</b>'."\t".$lastname.'<br/>';
echo '<br/>';
echo '<b>Phone Number:</b>'."\t".$tel.'<br/>';
echo '<br/>';
echo '<b>Email Address:</b>'."\t".$email.'<br/>';
echo '<br/>';
echo '<b>Address:</b>'."\t".$address.'<br/>';
echo '<br/>';
echo '<b>Number Of Adults:</b>'."\t".$adults.'<br/>';
echo '<br/>';
echo '<b>Number Of Children:</b>'."\t".$children.'<br/>';
echo '<br/>';
echo '<b>I have at least a Luggage:</b>'."\t".$luggage.'<br/>';
echo '<br/>';
echo '<b>Name Of Next Of Kin:</b>'."\t".$nextofkin.'<br/>';
echo '<br/>';
echo '<b>Next Of Kin\'s Phone Number:</b>'."\t".$nextofkintel.'<br/>';
echo '<br/>';
echo '<b>Next Of Kin\'s Address:</b>'."\t".$nextofkinaddress.'<br/>';
echo '<br/>';
echo '<b>Payable:</b>'."\t".$payable.'<br/>';   
echo '<br/>';
echo '</td>';
echo '<td class="code">';
echo '<span style="font-size: 50px;"><b>YOUR BOOKING CODE IS:</b>'."\n".$confirmation.'</span>';
echo '</td>';
echo '</tr>';
echo '</table>';



?>
</div>
</div>
</div>






</div>
</body>
</html>