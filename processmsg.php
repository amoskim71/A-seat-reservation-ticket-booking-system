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

$fullname=$_POST['fullname'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$date = date("M-d-Y H:i", strtotime ("+1 hour"));


if(empty($fullname)||empty($tel)||empty($email)||empty($subject)||empty($message))
{
/*echo 'you have not entered all the required details';*/
echo '<script language="javascript" type="text/javascript"> alert("fill in the required fields");</script>';
echo '<script language="javascript" type="text/javascript"> window.location="contactus.php";</script>';

exit;
}
else
{
    mysql_query("INSERT INTO feedbacks (fullname, tel, email, subject, message, date)
VALUES ('$fullname','$tel','$email','$subject','$message','$date')");

    echo '<script language="javascript" type="text/javascript"> alert("YOUR MESSAGE HAVE BEEN RECEIVED");</script>';
    echo '<script language="javascript" type="text/javascript"> window.location="contactus.php";</script>';

exit;
}


?>
</div>
</body>
</html>