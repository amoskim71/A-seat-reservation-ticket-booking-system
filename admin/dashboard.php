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
 <a href="route.php"><li>Route</li></a>

</ul>    
</div>
<div class="primcontnt">
<!--primary content-->
</div>
</div>
</div>






</div>
</body>
</html>