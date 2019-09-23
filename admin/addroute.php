<?php
include ('session.php');
?>


<?php
  $db = new mysqli('localhost','root','','utcdb');
  
  $query = "SELECT id,origin FROM origin";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $origins[] = array("id" => $row['id'], "val" => $row['origin']);
  }

  $query = "SELECT id, originid, destination FROM destination";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $destination[$row['originid']][] = array("id" => $row['id'], "val" => $row['destination']);
  }

  $Origins = json_encode($origins);
  $Destination = json_encode($destination);


?>


<html>
<head>
<title>unique transport company</title>
<link href="astyle.css" rel="stylesheet"/>


<script type='text/javascript'>
      <?php
        echo "var origins = $Origins; \n";
        echo "var destination = $Destination; \n";
      ?>

     function loadorigins(){
        var select = document.getElementById("originsSelect");
        select.onchange = updatedestination;
        for(var i = 0; i < origins.length; i++){
          select.options[i] = new Option(origins[i].val,origins[i].id);          
        }
      }
     
     function updatedestination(){
        var OrigSelect = this;
        var originid = this.value;
        var destinationSelect = document.getElementById("destinationSelect");
        destinationSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < destination[originid].length; i++){
          destinationSelect.options[i] = new Option(destination[originid][i].val,destination[originid][i].id);
        }

       var sel = document.getElementById("originsSelect");
       var sele = document.getElementById("destinationSelect");

       var a = sel.options[sel.selectedIndex].text;
        var b = sele.options[sele.selectedIndex].text;
        res = a + " - " + b;
         
        document.getElementById("route").value=res; 
           
      
        }


      function setTttext()
	{

           var sel = document.getElementById("originsSelect");
           var sele = document.getElementById("destinationSelect");

	   var a = sel.options[sel.selectedIndex].text;
           var b = sele.options[sele.selectedIndex].text;
           res = a + " - " + b;
        
          document.getElementById("route").value=res; 
          

	}

  


    </script>




</head>
<body onload='loadorigins()'>
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

<h4>Add New Origin</h4>

<form action="procaddroute.php" method="post">
	Origin:<br><input type="text" name="neworigin" style="width:200px;height:30px;">
	
	<input type="submit" value="Submit" name="Origin">
</form>
<hr>


<h4>Add Destination</h4>

<form action="procaddroute.php" method="post">
Origin:<br><select name="originid" style="width:200px;height:30px;"/>
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM origin");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['id'].'">';
								echo $row['origin'];
								echo '</option>';
							}
						?>
						</select><br>

	Destination:<br><input type="text" name="destination" style="width:200px;height:30px;">
	
	<input type="submit" value="Submit" name="Destination">
</form>
<hr>


<h2 align="center">Add Route</h2>





<div id="content" class="clearfix">
					
					
					
					<form action="procaddroute.php" method="post">
	Bus Type:<br><input type="text" name="type" style="width:300px;height:50px;"><br>

 Traveling from:<br/>
    <select id='originsSelect'  name="travelingfrom" style="width:150px;height:50px;">
   

	    </select> <br/>
     
    Traveling to:<br/>
    <select id='destinationSelect' onchange="setTttext()" name="travelingto" style="width:150px;height:50px;">
        
    </select><br>

	Route:<br><input type="text" name="route" id="route" style="width:300px;height:50px;"><br>
	Price:<br><input type="text" name="price" style="width:300px;height:50px;"><br>
	Total Seat No:<br><input type="text" name="seat" style="width:300px;height:50px;"><br>
	Time:<br><input type="text" name="time" style="width:300px;height:50px;" placeholder="e.g 10:30 am"><br>
	<input type="submit" value="Save" name="RouteDetails">
</form>
				</div>


</div>
</div>
</div>






</div>
</body>
</html>