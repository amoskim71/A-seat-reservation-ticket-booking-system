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
<h2 align="center">Routes</h2>





<div id="content" class="clearfix">
					
					<a style="color:blue; text-decoration:underline;" href="addroute.php">Add Route</a>
					
					<table cellpadding="5" cellspacing="5" border="2px" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Bus Type </th>
								<th> Route </th>
								<th> Seat Number </th>
								<th> Price </th>
								<th> Time </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM route");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['type'].'</td>';
									echo '<td><div align="right">'.$row['route'].'</div></td>';
									echo '<td><div align="right">'.$row['numseats'].'</div></td>';
									echo '<td><div align="right">'.$row['price'].'</div></td>';
									echo '<td><div align="right">'.$row['time'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editrutedetails.php?id='.$row['id'].'">edit</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>


</div>
</div>
</div>






</div>
</body>
</html>