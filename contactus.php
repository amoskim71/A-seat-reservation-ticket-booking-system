<html>
<head>
<title>unique transport company</title>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
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
<div class="map">
   <div><h5 align="center"> LOCATION OF OUR HEAD OFFICE</h5></div>
    <iframe src="https://www.google.com/maps/" width="550px" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="msg">

<script>
function validate()
{
    var x = document.forms["contactus"]["fullname"].value;
    if (x == "")
    {
        alert("please enter your fullname");
        return false;
    }
    var x = document.forms["contactus"]["tel"].value;
    if (x == "")
    {
        alert("please enter your phone number");
        return false;
    }
    var x = document.forms["contactus"]["email"].value;
    if (x == "")
    {
        alert("please enter your email address");
        return false;
    }
    var x = document.forms["contactus"]["subject"].value;
    if (x == "")
    {
        alert("please fill the subject field");
        return false;
    }
    var x = document.forms["contactus"]["message"].value;
    if (x == "")
    {
        alert("You left the message field empty");
        return false;
    }

}
</script>
<h4 align="center">MESSAGE/FEEDBACK</h4>
<form method="post" action="processmsg.php" id="contactus" onsubmit="return validate()">
    <table cellpadding="20px" align="center">
    <tr><td> <label>Full Name:</label></td><td><input type="text" name="fullname" placeholder="please enter your full name" style="width:300px;height:50px;" autofocus/></td></tr>
    <tr><td> <label>Phone Number:</label></td><td><input type="tel" name="tel" placeholder="please enter your phone number here" style="width:300px;height:50px;"/></td></tr>
    <tr><td> <label>Email Address:</label></td><td><input type="email" name="email" placeholder="please type your email address" style="width:300px;height:50px;"/></td></tr>
    <tr><td> <label>Subject:</label></td><td><input type="text" name="subject" placeholder="please enter subject here..." style="width:300px;height:50px;"/></td></tr>
    <tr><td> <label>Message:</label></td><td><textarea name="message" placeholder="please type your message/feedback here..." style="width:415px;min-height:212px;font-size:19px;"></textarea></td></tr>
    <tr><td colspan="2" align="right"><input type="submit" value="SEND" style="width:170px;height:50px;font-size:23px;background-color:green;color:white;"/></td></tr>
    </table>
    </form>
</div>
<div id="socialicons">
    <p align="center"><strong><i>We are social:</i></strong>&nbsp&nbsp<br/><br/><a href="#"><img src="images/fbicon.jpeg"/></a>&nbsp&nbsp&nbsp
                    <a href="#"><img src="images/twittericon.jpg"/></a>&nbsp&nbsp&nbsp
                    <a href="#"><img src="images/instaicon.png"/></a>
      </p>              
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