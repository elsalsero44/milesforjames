<?php
	// setup the database that we're going to be using on this page.
	include("../includes/dbconnect.php");
	include("../includes/utilities.php");
	include("queries.php");
	require_once "Mail.php";
	
	// open up the db for use...
	$poDb = poOpenDatabase();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Miles for James</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link href="../mfjstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #0033FF;
	font-weight: bold;
}
-->
</style>
<div><a href="../index2.php" title="Contact Us" id="container_contactus">Contact Us</a></div>

<div id="container2">	
  <div id="nav">
    <?php include ("../includes/nav.html") ?>
  </div>
	<div id="middlearea">
	  <p>
      <div id="logo"><img src="../images/Jlogo.gif" width="84" height="86"></div>
      <div id="maintextsub">
        <h1>Contact Us...</h1>
 
<h2>General Inquiry</h2>
<p>For questions regarding the upcoming events or any general information, email us at <a href="mailto:info@milesforjames.com">info@milesforjames.com</a> or you can write to:</p>
<p>&nbsp;</p>
<p>Miles For James, Inc.</p>
<p>PO Box 6504</p>
<p>Aurora, IL 60598</p>
<h2>Sponsorship Opportunities and Donations inquiry</h2>

<p>For questions regarding donations or sponsorship email <a href="mailto:donations@milesforjames.com">donations@milesforjames.com</a>.</p>

<h2>Sales</h2>
  For questions regarding Miles for James merchandise, email <a href="mailto:sales@milesforjames.com">sales@milesforjames.com</a>.
  </p>

<?
// commented out while Jo figures out what she wants to do...
if (true)
{
?>
<h2>Miles For James Volunteers</h2>
<p>Would you like to have some fun, meet new friends and help out a good cause? If so, consider volunteering some of your time to help out with the planning and/or execution of one of our events by filling out the form below. </p>
<p>&nbsp;</p>
<form name="contactUs" method="POST" action="index.php">
<table width="100%" border="0">
  <tr>
    <td>Name:</td>
    <td><input name="name" type="text" id="name" size="50"></td>
    </tr>
  <tr>
    <td>Email:</td>
    <td><input name="email" type="text" id="email" size="50"></td>
    </tr>
  <tr>
    <td>Phone 1 (Optional):</td>
    <td>(
      <input name="phone1_areacode" type="text" id="phone1_areacode" size="3" maxlength="3">
      )
      -
        <input name="phone1_prefix" type="text" id="phone1_prefix" size="3" maxlength="3"> 
        - 
        <input name="phone1_postfix" type="text" id="phone1_postfix" size="4" maxlength="4"></td>
    </tr>
  <tr>
    <td>Phone 2 (Optional):</td>
    <td>(
      <input name="phone2_areacode" type="text" id="phone2_areacode" size="3" maxlength="3">
)
      -
<input name="phone2_prefix" type="text" id="name7" size="3" maxlength="3">
-
<input name="phone2_postfix" type="text" id="name8" size="4" maxlength="4"></td>
    </tr>
    <td>Notes (Optional):</td>
    <td><textarea name="notes" id="notes" cols="50" rows="5"></textarea></td>
    </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="submit" id="submit" value="Send">
        </div>
	</td>
  </tr>
</table>
</form>
<?php 
	// if they are submitted the form, then post it to the db for tracking and send out the email.
	// also post a little note thanking them for taking the time to fill out the form.
	if (count($_POST) > 0)
	{
		if (bIsValidEmail($_POST['email']))
		{
			$szFrom = $_POST['name'] ." <" . $_POST['email'] . ">";
			$szTo = "Miles For James <volunteers@milesforjames.com>";
			$szSubject = "Miles For James Volunteer";
			
			// build body of message from form parms.
			$szBody 	= 	"Name: " . $_POST['name'] . "\n";
			$szBody 	.= 	"Email: " . $_POST['email'] . "\n";
			$szBody 	.= 	"Phone 1: (" . $_POST['phone1_areacode'] . ") " . $_POST['phone1_prefix'] . "-" . $_POST['phone1_postfix'] . "\n";
			$szBody 	.= 	"Phone 2: (" . $_POST['phone2_areacode'] . ") " . $_POST['phone2_prefix'] . "-" . $_POST['phone2_postfix'] . "\n\n";
			$szBody 	.= 	"\nNotes: " . $_POST['notes'];
	
			// setup the standard hosting info to send SMTP through this email address.
			$szHost = "mail.milesforjames.com";
			$szUserName = "volunteers+milesforjames.com";
			$szPassword = "superman";
	
			$szHeaders = array (	'From' => $szFrom,
									'To' => $szTo,
									'Subject' => $szSubject);
	
			$smtp = Mail::factory(	'smtp',
									array ('host' => $szHost,
									'auth' => true,
									'username' => $szUserName,
									'password' => $szPassword));
	
			$mail = $smtp->send($szTo, $szHeaders, $szBody);
	
			if (PEAR::isError($mail)) 
			{
				echo("<p>" . $mail->getMessage() . "</p>");
			}
			else
			{
	?> 
				<p align="center" class="style1">Thank you! Someone will be in touch with you shortly!</p>
<?php
			}
		}
		else
		{
?> 
				<p align="center" class="style1">Email address entered is invalid, please try again.</p>
<?php		
		}
	}
}			
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<p>&nbsp;</p>
			  <p>		      </p>
              
           
		 
              
            
	  </div>
      <div id="subrightarea">
        <p><br>
          <br>
<p><a href="../events/5krace.php"><img src="../images/banners/5K_220x200.png" alt="Miles for James 5K Race" width="220" height="200" border="0"></a><br>                
      </div>
       
<div id="footer">
<?php include ("../footer.html") ?>
</div>   
			
  </div>
</div>
<p>
</body>
</html>
<?
	// close the db.
	vCloseDatabase($poDb);
?>
