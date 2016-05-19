<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php include ("../includes/constants.php") ?>
<html>
<head>
<title>Miles for James</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link href="../mfjstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #990000}
.style3 {
	color: #333333;
	font-style: italic;
}
.deadline {
	color:#FF0000;
	font-weight:bold;
}
-->
</style>
<div><a href="../index.php" title="Annual 5K Race" id="container_5krace">Annual 5K Race</a></div>

<div id="container2">	
  <div id="nav">
    <?php include ("../includes/nav.html") ?>
  </div>
	<div id="middlearea">
	  <p>
      <div id="logo"><img src="../images/j-logo.png"></div>
      <div id="maintextsub">
        <h1>Head for Safety 5K</h1>
        <h2>Registration</h2>
 <? 
 	if ($c_bRegistrationOpen)
	{
?>          
        <p>Registration is now open! It's easy, convenient and secure. All you need is a credit card and to answer a few questions.</p>
        <p>&nbsp;</p>
        <p><a href="https://www.signmeup.com/<?=$c_szRaceId?>" target="_blank"><img src="../images/registrationbutton.gif" width="150" height="44" border="0"></a></p>
        <p>&nbsp;</p>
        <p class="deadline">Register by September<u> 10th</u> to guarantee your desired shirt size for this year’s race. On-Line Registration will close on the night before the race at 9:00pm.</p>
        <p>&nbsp;</p>
        <p>**Day-of-Registration will be available for $30/indv and $100/family of 4.</p>
<?
	}
	else
	{
?>   
	    <p>REGISTRATION INFORMATION WILL BE POSTED SOON! PLEASE CHECK BACK SOON.</p>
<?
	}
?>            
        <h2>General Information</h2>
        <p><strong>When:</strong> </p>
        <p>Saturday, October 1, 2016</p>
        <p>&nbsp;</p>
        <p><strong>Time:</strong> </p>
        <p>7:30 am Packet Pick up/ Same Day Registration Open<br>
        9:00 am Runner's start; Walkers follow immediately after</p>
        <p>10:00 am 100 Yard Kid's Dash<br>
        </p>
        <p>&nbsp;</p>
        <p><strong>Place:</strong> </p>
        <p>Family Harvest Church </p>
        <p>	18500 92nd Ave, Tinley Park, IL 60487<br>
        </p>
        <p>&nbsp;</p>
        <p><strong>Price:</strong> </p>
        <p>$25 / individual</p>
        <p>$80 / family of four (must have same last name)</p>
        <p>$10 / child for 100 Yard Kid's Dash (10 years and under)<br>
        </p>
        <p>&nbsp;</p>
        <p><strong>Route: </strong></p>
        <p>Click <strong><a href="../images/5KRoute.jpg" target="_blank">here</a></strong> to view our <strong>certifiied</strong> route.  USATF Certification Number: IL-13034-JW</p>
        <p>&nbsp;</p>
        <p><strong>Packet Pickup: </strong></p>
        <p>Packet pick up available on race day only starting at 7:30am.</p>
        <p>&nbsp;</p>
        <p>Packets consist of your race bib, our new Head For Safety Race shirts and other various goodies from our sponsors.</p>
        <p>&nbsp;</p>
        <p><strong>Awards: </strong><br>
          Prizes will be awarded to the top overall male and female finisher. Medals to the top 3 male and female finishers in each age group. Medals to all participants in the 100 yd kid dash. Additional prizes to the top 3 fundraisers.<br>
        Age groups: 14 and under, 15-19, 20-24, 25-29, 30-34, 35-39, 40-44, 45-49, 50-54, 55 and over.</p>
        <p class="style1">&nbsp;</p>
<?
if ($c_bShowPledgeChallenge)
{        
?>
        <h2>Accept our Pledge Challenge and be rewarded!</h2>
        <p>To help make the <?=$c_szRaceIdentifier?>
         Annual MILES for JAMES 5K Run/Walk more successful than the past years, we are challenging you to raise pledges.  Pledge forms and money will be collected on race day only.</p>
        <p>&nbsp;</p>
        <p><strong>Participants with pledges of $250 or more will receive this special MILES for JAMES long sleeve shirt.</strong></p>
        <p>&nbsp;</p>
        <p><img src="../images/MFJ_LongSleeve_Incentive2012.jpg" alt="Woo, cool shirt!"></p>
        <p>&nbsp;</p>
        <p><a href="mfJPledgeSheet.pdf"><img src="../images/pledgebutton.gif" alt="Click here to download the MFJ Form" width="150" height="44" border="0"></a></p>
        <p>&nbsp;</p>
<?
}
?>
       
        <p>&nbsp;</p>
        <h2>Transportation and Parking</h2>
        <p><strong>Directions from I-80 &amp; LaGrange Rd (Rt 45)</strong><br>
Exit LaGrange Rd/96th Ave and head North to 183th St. <br>
Turn RIGHT on 183rd St. and head East to 92nd Ave.<br>
Turn RIGHT on 92nd Ave. <br>
92nd &nbsp;Ave. takes you right into church parking lot.<u></u><u></u></p>
        <p>&nbsp;<u></u><u></u></p>
        <p><strong>Directions from I-80 Harlem Ave (Rt 43)</strong><strong><br>
          </strong>Exit Harlem Ave North and head North to 183rd St. <br>
          Turn LEFT on 183rd St. and head West to 92nd Ave.<br>
          Turn LEFT on 92nd Ave. <br>
          92nd &nbsp;Ave. takes you right into church parking lot.<u></u><u></u></p>
        <p>&nbsp;<u></u><u></u></p>
        <p><strong>Directions from I-55 &amp; LaGrange Rd (Rt 45)</strong><strong><br>
          </strong>Exit LaGrange Rd/96th Ave South and head South to 183rd St.<br>
          Turn LEFT on 183rd St. and head East to 92nd Ave.<br>
          Turn RIGHT on 92nd Ave. <br>
          92nd &nbsp;Ave. takes you right into church parking lot.<u></u><u></u></p>
        <p>&nbsp;<u></u><u></u></p>
        <p><strong>Parking will be available in the church parking lot.</strong></p>
        <p class="style1">&nbsp;</p>
        <p></p>
        <h2>Questions?</h2>
        <p class="style1">&nbsp;</p>
        <p>For any questions about the Head For Safety 5K, please email <a href="mailto:info@milesforjames.com">info@milesforjames.com</a></p>
        <p></p>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<p>&nbsp;</p>
			  <p>		      </p>
              
           
		 
              
            
	  </div>
      <div id="subrightarea">
        
<p><a href="mailto:sales@milesforjames.com"><img src="../images/banners/wristbands_220x200.gif" alt="Miles for James wristbands" width="220" height="200" border="0"></a>
<p>
<h2>6th Annual 5K Race Results<br>
  <span class="style3">September 19, 2015</span></h2>
<p><strong>Race results:</strong> <a href="http://racetime.info/wp-content/uploads/2015/09/Miles-For-James-5K-Age-Group-Results.htm">Gender/Age Group</a><br>
  <strong>Race results:</strong> <a href="http://racetime.info/wp-content/uploads/2015/09/Miles-For-James-5K-Overall-Results.htm">Overall</a></p>

<p>
<h2>5th Annual 5K Race Results<br>
  <span class="style3">September 27, 2014</span></h2>
<p><strong>Race results:</strong> <a href="http://racetime.info/wp-content/uploads/2014/09/Miles-For-James-5K-Age-Group-Results.htm">Gender/Age Group</a><br>
  <strong>Race results:</strong> <a href="http://racetime.info/wp-content/uploads/2014/09/Miles-For-James-5K-Overall-Results.htm">Overall</a></p>
<h2>4th Annual 5K Race Results<br>
  <span class="style3">September 21, 2013</span></h2>
<p><strong>Race results:</strong> <a href="results/2013/MILES-FOR-JAMES-5K-AGE-GROUP-RESULTS.html">Gender/Age Group</a><br>
  <strong>Race results:</strong> <a href="results/2013/MILES-FOR-JAMES-5K-OVERALL-RESULTS.html">Overall</a></p>
<h2>3rd Annual 5K Race Results<br>
  <span class="style3">September 22, 2012</span></h2>
<p><strong>Race results:</strong> <a href="results/2012/MILES-FOR-JAMES-5K-AGE-GROUP-RESULTS.htm">Gender/Age Group</a><br>
  <strong>Race results:</strong> <a href="results/2012/MILES-FOR-JAMES-5K-OVERALL-RESULTS.htm">Overall</a></p>
<h2>2nd Annual 5K Race Results<br>
  <span class="style3">September 10, 2011</span></h2>
<p><strong>Race results:</strong> <a href="results/2011/MFJ_AgeGroupResults.HTM">Gender/Age Group</a><br>
  <strong>Race results:</strong> <a href="results/2011/MFJ_OverallFinishlist.HTM">Overall</a></p>
<h2>1st Annual 5K Race Results<br>
      <span class="style3">August 14, 2010</span></h2>
<p><strong>Race results:</strong> <a href="MILES_FOR_JAMESR.webarchive">Gender/Age Group</a><br>
    <strong>Race results:</strong> <a href="MILES_FOR_JAMESO-1.webarchive">Overall</a></p>
<p><a href="5krace.php"></a>
<p></div>
       
<div id="footer">
<?php include ("../footer.html") ?>
</div>   
			
  </div>
</div>
<p>



</body>
</html>
