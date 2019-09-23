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
    <a href="messages.php"><li>Messages</li></a>
<a href="route.php"><li>Route</li></a>

</ul>    
</div>
<div class="primcontnt">
<!--primary content-->
<h2 align="center"> Reservations</h2>
<form method="post" action="findreservation.php">
    <strong>Find Reservation:</strong><br/>
    <input type="text" name="bkingcode" placeholder="Enter booking code" style="width:200px;height:50px;border:solid 1px;" autofocus/>
</form>
<table cellpadding="5" cellspacing="5" id="msgtable" border="2px">
<thead>
<tr>
<th align="left"><b> Booking Code </b></th>
<th align="left"><b> First Name </b></th>
<th align="left"><b> Last Name </b></th>
<th align="left"><b> Phone Number </b></th>
<th align="left"><b> Email Address</b> </th>
<th align="left"><b> Address </b></th>
<th align="left"><b> Number of Adults </b></th>
<th align="left"><b> Number of Children </b></th>
<th align="left"><b> Luggage </b></th>
<th align="left"><b> Method of Payment </b></th>
<th align="left"><b> Name on Card </b></th>
<th align="left"><b> Card Number </b></th>
<th align="left"><b> Card Expiring Date </b></th>
<th align="left"><b> Card Validation Code </b></th>
<th align="left"><b> Next of Kin's Full Name </b></th>
<th align="left"><b> Next of Kin's Phone Number </b></th>
<th align="left"><b> Next of Kin's Address </b></th>
<th><b> Action</b> </th>
								
</tr>
</thead>
<tbody>
<?php

/*include the file the holds the database connection details*/
include('db.php');

/*query the database (using the select sql statement)*/
$result = mysql_query("SELECT * FROM bookareservation");

/*fetch rows from the database*/
while($row = mysql_fetch_array($result))
{


									
echo '<td>'.$row['bookingcode'].'</td>';
echo '<td>'.$row['firstname'].'</td>';
echo '<td>'.$row['lastname'].'</td>';
echo '<td>'.$row['tel'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['address'].'</td>';
echo '<td>'.$row['adults'].'</td>';
echo '<td>'.$row['children'].'</td>';
echo '<td>'.$row['luggage'].'</td>';
echo '<td>'.$row['payment'].'</td>';
echo '<td>'.$row['cardname'].'</td>';
echo '<td>'.$row['cardnumber'].'</td>';
echo '<td>'.$row['expiringdate'].'</td>';
echo '<td>'.$row['cvc'].'</td>';
echo '<td>'.$row['nextofkin'].'</td>';
echo '<td>'.$row['nextofkintel'].'</td>';
echo '<td>'.$row['nextofkinaddress'].'</td>';

									
echo '<td style="background-color:#f9341e; color: white;"> <a href="deletereservation.php?id='.$row['bookareservationid'].'" title="Click to Delete">DELETE</a></td>';
echo '</tr>';
}
?> 
</tbody>
</table>

</div>
</div>
</div>






</div>
</body>
</html>