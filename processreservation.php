
<html>
<head>
<title>unique transport company</title>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="content">
<?php

//insert to database
include('db.php');

function createRandomPassword() {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 6) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}

$confirmation = createRandomPassword();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$address=$_POST['address'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$luggage=$_POST['luggage'];
$payment=$_POST['payment'];
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$expiringdate=$_POST['expiringdate'];
$cvc=$_POST['cvc'];
$nextofkin=$_POST['nextofkin'];
$nextofkintel=$_POST['nextofkintel'];
$nextofkinaddress=$_POST['nextofkinaddress'];


$qty=$_POST['qty'];
$busnum=$_POST['busnum'];
$setnum=$_POST['setnum'];
$date=$_POST['date'];

$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
	$price=$row['price'];

	}
	$payable=$qty*$price;



if(empty($firstname)||empty($lastname)||empty($tel)||empty($email)||empty($payment)||empty($cardname)||empty($cardnumber)||empty($expiringdate)||empty($cvc)||empty($nextofkin)||empty($nextofkintel)||empty($nextofkinaddress))
{
/*echo 'you have not entered all the required details';*/
echo '<script language="javascript" type="text/javascript"> alert("fill in the required fields");</script>';
echo '<script language="javascript" type="text/javascript"> window.location="bookareservation.php";</script>';

exit;
}
else
{
mysql_query("INSERT INTO bookareservation (bookingcode, firstname, lastname, tel, email, address, adults, children, luggage, payment, cardname, cardnumber, expiringdate, cvc, nextofkin, nextofkintel, nextofkinaddress,payable,setnumber)
VALUES ('$confirmation','$firstname','$lastname','$tel','$email','$address','$adults','$children','$luggage','$payment','$cardname','$cardnumber','$expiringdate','$cvc', '$nextofkin','$nextofkintel','$nextofkinaddress','$payable','$setnum')");


mysql_query("INSERT INTO reserve (date, bus, seat_reserve, transactionnum, seat)
VALUES ('$date', '$busnum', '$qty', '$confirmation','$setnum')");

    echo '<script language="javascript" type="text/javascript"> alert("YOUR DETAILS HAVE BEEN RECEIVED SUCCESSFULLY");</script>';
    echo '<script language="javascript" type="text/javascript"> window.location="bookingdetails.php?confirmno='.$confirmation.'";</script>';

exit;
}


//header("location: contactus.php");

//header("location:masterpage.php?id=".$email);
?>
</div>
</body>
</html>