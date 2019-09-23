<?php
//php section for getting origin and destination

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

//convert origins and destination gotten to JSON format
  $Origins = json_encode($origins);
  $Destination = json_encode($destination);


?>


<html>
<head>
<title>unique transport company</title>
<link href="style.css" rel="stylesheet"/>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>


<script type='text/javascript'>
      <?php

//receive and store JSON formatted origins and destination gotten above
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


         $.ajax({
           type: 'post',
           url: 'getroute.php',
           data: {
            get_sel:res
           },
          success: function (response) {
            document.getElementById("route").innerHTML=response; 
           }
          });


      
        }

      function setTttext()
	{

           var sel = document.getElementById("originsSelect");
           var sele = document.getElementById("destinationSelect");

	   var a = sel.options[sel.selectedIndex].text;
           var b = sele.options[sele.selectedIndex].text;
           res = a + " - " + b;


         $.ajax({
           type: 'post',
           url: 'getroute.php',
           data: {
            get_sel:res
           },
          success: function (response) {
            document.getElementById("route").innerHTML=response; 
           }
          });


	}

  

    </script>



	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>
<body onload='loadorigins()'>
<div class="wrapper">

<div class="header">
<!--header here-->
<!--<span class="hspan">UTC<small>.com</small></span><br/>-->
<span align="center"><img src="images/utcdraww.jpg" width="400px" height="150px"/></span>
<div id="menu">
    <table cellpadding="15px" align="center">
        <tr>
<td><a href="index.php"><strong>HOME</strong></a></td>
<td><a href="bookingstatus.php"><strong>BOOKING STATUS</strong></a></td>
<td><a href="contactus.php"><strong>CONTACT US</strong></a></td>
<td><a href="aboutus.php"><strong>ABOUT US</strong></a></td>
</tr>
</table>
</div>
</div>

<div class="content">
<!--content here-->
<div class="slider">
    <!--slider here-->

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/utc1.jpg" alt="utc1" title="utc1" id="wows1_0"/></li>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/utc2.jpg" alt="full screen slider" title="utc2" id="wows1_1"/></a></li>
		<li><img src="data1/images/utc4.jpg" alt="utc4" title="utc4" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="utc1"><img src="data1/tooltips/utc1.jpg" alt="utc1"/>1</a>
		<a href="#" title="utc2"><img src="data1/tooltips/utc2.jpg" alt="utc2"/>2</a>
		<a href="#" title="utc4"><img src="data1/tooltips/utc4.jpg" alt="utc4"/>3</a>
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v6.8</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
 </div>   
<div class="book">
    <!--booking a bus-->

<script type="text/javascript" language="javascript">
function validate()
{
 var sel = document.getElementById("originsSelect");
 var x = sel.options[sel.selectedIndex].text;
    
    if (x == "Traveling from....")
    {
        alert("please select where you are traveling from");
        return false;
    }
}
</script>

    <h3 align="center">BOOK A BUS</h3>
    <form method="post" action="bookareservation.php" id="bkr" onsubmit="return validate()">
<table cellpadding="20px" align="center" id="booktab">
    <tr>
        <td>
  Traveling from:<br/>
    <select id='originsSelect'  name="travelingfrom" style="width:150px;height:50px;">
   

	    </select> 
      </td>
      <td>
    Traveling to:<br/>
    <select id='destinationSelect' onchange="setTttext()" name="travelingto" style="width:150px;height:50px;">
        
    </select>
    </td>

<td>
    Available Buses/Type/Time/Price:<br/>
<input id="tttext" type="hidden" name="tttext" />
    <select id="route" name="route" style="width:280px;height:50px;"/>
						
   </select>
    </td>
    <td>
    Traveling date:<br/>
    <input type="date" name="date" placeholder="dd/mm/yyyy" style="width:150px;height:50px;"/>
     </td>  
<td> 
No of Adults:<br/>
<select name="adults" style="width:70px;height:50px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
 </select>

</td> 

<td> 
No of Children:<br/>
<select name="children" style="width:70px;height:50px;">
<option value="0">0</option>    
<option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
 </select>

</td> 
    </tr>
    <tr><td colspan="6" align="center"><input type="submit" name="submit" value="Book A Reservation" style="width:300px;height:50px;font-size:23px;"/></td></tr>
    </table>
    </form>

</div>
<div id="conv">
    <table cellpadding="30px" align="center" id="convtab">
        <tr>
            <td><a href="customercare.php">CUSTOMER CARE</a></td>
            <td><a href="faqs.php">FAQs</a></td>
            <td><a href="termsnconditions.php">TERMS AND CONDITIONS</a></td>
            <td>FOLLOW AND CONTACT US ON:&nbsp
                    <a href="#"><img src="images/fb.jpeg"/></a>&nbsp&nbsp
                    <a href="#"><img src="images/twitter.jpg"/></a>&nbsp&nbsp
                    <a href="#"><img src="images/instagram.png"/></a></td>
       </tr>
       </table>             
                
</div>

</div>




<div class="footer">
<!--footer here-->
<p align="center">&copy 2017, All rights reserved to UTC.com<br/>
Powered By iJosef
</p>
</div>

</div>
</body>
</html>