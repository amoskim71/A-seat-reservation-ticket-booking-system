<?php
//include ('session.php');
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
<a href="route.php"><li>Route</li></a>

</ul>    
</div>
<div class="primcontnt">
<!--primary content-->
<h2 align="center"> Messages/Feedbacks</h2>
<table cellpadding="5" cellspacing="5" id="msgtable" border="2px">
<thead>
<tr>
<th align="left"><b> Name </b></th>
<th align="left"><b> Phone Number </b></th>
<th align="left"><b> Email Address</b> </th>
<th align="left" style="width:150px;"><b> Subject </b></th>
<th align="left" style="width:405px;"><b>Message</b></th>
<th><b>Date/Time Sent</b></th>
<th><b> Action</b> </th>
								
</tr>
</thead>
<tbody>
<?php

/*include the file that holds the database connection details*/
include('db.php');

/*query the database (using the select sql statement)*/
$result = mysql_query("SELECT * FROM feedbacks ORDER BY date DESC LIMIT 4");

/*fetch rows from the database*/
while($row = mysql_fetch_array($result))
{


									
echo '<td>'.$row['fullname'].'</td>';
echo '<td>'.$row['tel'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['subject'].'</td>';
echo '<td>'.$row['message'].'</td>';
echo '<td>'.$row['date'].'</td>';
									
echo '<td style="background-color:#f9341e; color: white;"> <a href="deletemsg.php?id='.$row['feedbackid'].'" title="Click to Delete">DELETE</a></td>';
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