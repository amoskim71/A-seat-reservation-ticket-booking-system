<html>
<head>
<title>unique transport company</title>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
<style>
    .error {color: red;font-style:italic;}
</style>


</head>
<body>
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
<div class="reserve">

<h3 align="center">BOOK FOR SEAT RESERVATION</h3>







<?php
include('db.php');
$busnum=$_POST['route'];
$date=$_POST['date'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$qty=$adults+$children;

if (empty($busnum))
{
header("location: index.php");
}


$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysql_query("SELECT sum(seat_reserve) FROM reserve where date = '$date'");
							while($rows = mysql_fetch_array($query))
							  {
							  $holdvalue=$rows['sum(seat_reserve)'];
							  }
		$avail=$numofseats-$holdvalue;
		$setnum=$holdvalue+1;
	}
?>
<?php
if ($avail < $qty){
echo 'Qty reserve exced the available seat of the bus';
}
else if($avail > 0)
{
?>
<script type="text/javascript" language="javascript">
function validate()
{
    var a = document.forms["form"]["firstname"].value;
    if (a == "")
    {
        alert("your first name is required");
        return false;
    }
    var b = document.forms["form"]["lastname"].value;
    if (b == "")
    {
        alert("your last name is required");
        return false;
    }
    var c = document.forms["form"]["tel"].value;
    if (c == "")
    {
        alert("your phone number is required");
        return false;
    }
    var d = document.forms["form"]["email"].value;
    if (d == "")
    {
        alert("your email is required");
        return false;
    }
    var e = document.forms["form"]["address"].value;
    if (e == "")
    {
        alert("your address is required");
        return false;
    }
    var f = document.forms["form"]["cardname"].value;
    if (f == "")
    {
        alert("your name on your debit card is required");
        return false;
    }
    var g = document.forms["form"]["cardnumber"].value;
    if (g == "")
    {
        alert("your debit card number is required");
        return false;
    }
    var h = document.forms["form"]["expiringdate"].value;
    if (h == "")
    {
        alert("your debit card's expiring date is required");
        return false;
    }
    var i = document.forms["form"]["cvc"].value;
    if (i == "")
    {
        alert("your debit card validation code is required");
        return false;
    }
    var j = document.forms["form"]["nextofkin"].value;
    if (j == "")
    {
        alert("the full name of your next of kin is required");
        return false;
    }
    var k = document.forms["form"]["nextofkintel"].value;
    if (k == "")
    {
        alert("next of kin's phone number is required");
        return false;
    }
    var l = document.forms["form"]["nextofkinaddress"].value;
    if (l == "")
    {
        alert("next of kin's address is required");
        return false;
    }
}
</script>
    

<p align="center"><span class="error">(*  required field)</span></p>
<form  method="post" action="processreservation.php" id="form" onsubmit="return validate()">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<input type="hidden" value="<?php echo $adults ?>" name="adults" />
<input type="hidden" value="<?php echo $children ?>" name="children" />
<table align="center" cellpadding="20px">

<tr><td>Seat Number:</td><td><input type="text" name="setnum" value="
<?php
$N = $qty;
for($i=0; $i < $N; $i++)
{
echo $i+$setnum.', ';
} 
 ?>
" id="name" readonly/><br/></td></tr>
<tr><td>First Name:</td><td><input type="text" name="firstname" placeholder="please enter your firstname here" style="width:300px;height:50px;" autofocus/>
<span class="error">* </span><br/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastname" placeholder="please enter your lastname here"style="width:300px;height:50px;"/>
<span class="error">* </span><br/></td></tr>
<tr><td>Phone Number:</td><td><input type="tel" name="tel" placeholder="please enter your phone number" style="width:300px;height:50px;"/>
<span class="error">*</span> <br/></td></tr>
<tr><td>Email Address:</td><td><input type="email" name="email" placeholder="please enter your email address here" style="width:300px;height:50px;"/>
<span class="error">* </span><br/></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" placeholder="please enter your home address here" style="width:300px;height:50px;"/>
<span class="error">* </span><br/></td></tr>
<tr><td>Do You Have Any Luggage(s)?:</td><td> <input type="radio" name="luggage" value="Yes"/>Yes
<input type="radio" name="luggage" checked value="No"/>No</td></tr>
<tr><td>Method Of Payment:</td><td>We support: &nbsp &nbsp <img src="images/visa.gif"/> &nbsp<img src="images/verve.jpg"/> &nbsp <img src="images/mastercard.png"/>&nbsp<img src="images/paypal.jpg"/><br/><br/>
<em>(Your details are safe with us)</em><br/><br/>
 <input type="radio" name="payment" checked value="Visa"/>Visa <input type="radio" name="payment" value="Verve"/>Verve 
<input type="radio" name="payment" value="Mastercard"/>MasterCard <input type="radio" name="payment" value="Paypal"/>Paypal<span class="error">* </span></td></tr>
<tr><td>Payment Informations:</td><td><input type="text" name="cardname" placeholder="Name on card" style="width:300px;height:50px;"/><span class="error">* </span><br/><br/>
<input type="text" name="cardnumber" placeholder="Credit card number" style="width:300px;height:50px;"/><span class="error">* </span><br/><br/><input type="text" name="expiringdate" placeholder="Expiring Date: MM/YY" style="width:200px;height:50px;"/>
<span class="error">* </span><input type="text" name="cvc" placeholder="CVC" style="width:100px;height:50px;" maxlenght="3"/><span class="error">* </span></td></tr>
<tr><td colspan="2" align="center" style="text-decoration:underline;"><em>incase of any emergency</em></td></tr>
<tr><td>Next Of Kin:</td><td><input type="text" name="nextofkin" placeholder="full name of next of kin here" style="width:300px;height:50px;"/>
<span class="error">* </span><br/></td></tr>
<tr><td>Next Of Kin's Phone Number:</td><td><input type="tel" name="nextofkintel" placeholder="next of kin's phone number here" style="width:300px;height:50px;"/>
<span class="error">* </span><br/></td></tr>
<tr><td>Next Of Kin's Address:</td><td><input type="text" name="nextofkinaddress" placeholder="next of kin's address here" style="width:300px;height:50px;" />
<span class="error">*</span> <br/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Book Now" style="width:300px;height:50px;font-size:23px;"/></td></tr>
</table>
</form>

<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
?>



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




<div class="bfooter">
<!--footer here-->
<p align="center">&copy 2017, All rights reserved to UTC.com<br/>
Powered By iJosef
</p>
</div>

</div>
</body>
</html>