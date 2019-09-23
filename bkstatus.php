<html>
<head>
<title>unique transport company</title>
<link href="style.css" rel="stylesheet"/>
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
<div class="bkcode">
<?php
include ('db.php');

$bcode = $_POST['bookcode'];
/*query the database (using the select sql statement)*/
$result = mysql_query("select * from bookareservation where bookingcode = '$bcode' ");

$rowcount= mysql_num_rows($result);

if($rowcount > 0){

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


$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$bcode'");
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
}
else{
echo "NO RESULTS FOUND";
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




<div class="footer">
<!--footer here-->
<p align="center">&copy 2017, All rights reserved to UTC.com<br/>
Powered By iJosef
</p>
</div>

</div>
</body>
</html>