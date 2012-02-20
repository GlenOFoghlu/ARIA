<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>What Mobile phone best suits my kneeds?</title>

<link href="css/contentstyle.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="defualt.css" rel="alternate stylesheet" type="text/css" title="defualt" />
<link href="larger.css" rel="alternate stylesheet" type="text/css" title="larger" />
<link href="high.css" rel="alternate stylesheet" type="text/css" title="highcontrast" />
<link href="sanserif.css" rel="alternate stylesheet" type="text/css" title="sansserif" />
<link href="pda.css" rel="alternate stylesheet" type="text/css" title="pda" />
<link href="print.css" rel="alternate stylesheet" type="text/css" title="print" />
<script src="script/crumbs.js" type="text/javascript"></script>  
<script language="javascript1.2">

function valbutton(thisform) {
myPick = -1;
for (i=thisform.pick.length-1; i > -1; i--) {
if (thisform.pick[i].checked) {
myPick = i; i = -1;
}
}
if (myPick == -1) {
alert("You must make a selection");
return false;
}
// -----------------------------
myTime = -1;
for (i=thisform.time.length-1; i > -1; i--) {
if (thisform.time[i].checked) {
myTime = i; i = -1;
}
}
if (myTime == -1) {
alert("You must make a selection");
return false;
}
else if  (myPick == 0 && myTime ==0)
{alert("iPhone 4");}
else if  (myPick == 1 && myTime ==0)
{alert("BlackBerry 9650");}
else if  (myPick == 2 && myTime ==0)
{alert("Samsung Galaxy S2");}
else if  (myPick == 3 && myTime ==1)
{alert("Any entry Level Phone will do you...");}
else if  (myPick == 0 && myTime ==1)
{alert("iPhone 4");}
else if  (myPick == 1 && myTime ==1)
{alert("BlackBerry 9650");}
else if  (myPick == 2 && myTime ==1)
{alert("Samsung Galaxy S2");}
else if  (myPick == 3 && myTime ==2)
{alert("Any entry Level Phone will do you...");}
else if  (myPick == 0 && myTime ==2)
{alert("iPhone 4");}
else if  (myPick == 1 && myTime ==2)
{alert("BlackBerry 9650");}
else if  (myPick == 2 && myTime ==3)
{alert("Samsung Galaxy S2");}
else if  (myPick == 3 && myTime ==3)
{alert("Any entry Level Phone will do you...");}

}</script>

</head>
<body>
<div id="pagewidth" style="height: 637px" >
	<!-- Start Header Section -->	 
	<?php  include 'header.php';?>
	<!--End header Section -->
	<div id="wrapper" style="height: 422px">
		<div id="rightcol" style="height: 416px">
	<ul id="navigation">
		<li class="one"><a href="index.php" tabindex="3">About</a></li>
		<li class="two"><a href="findAPhone.php" tabindex="4">Phones</a></li>
		<li class="three"><a href="Information.php"tabindex="5">Info</a></li>
		<li class="four"><a href="faq.php"tabindex="6">FAQ</a></li>
		<li class="five selected"><a href="Start.php"tabindex="7">Start</a></li>
		<li class="shadow"></li>
	</ul>
		<div id="content" style="height: 326px">
		<!-- Content goes here -->
		<form name="PhoneChoice">	<fieldset name="Group1">
				<legend>Mobile Phone Usage</legend>
				<br/>	
		  What do you like to use your mobile phone for?<br/>
		<input type="radio" name="pick" value="1" /> Every possible Task <br/>
		<input type="radio" name="pick" value="2" /> Emailing, Running my office<br/>
		<input type="radio" name="pick" value="3" /> Playing Games <br/>
		<input type="radio" name="pick" value="4" /> Just making Calls<br/>
		<br/>
		  How often do you use your mobile Phone<br/>
		<input type="radio" name="time" value="1" /> Every Day <br/>
		<input type="radio" name="time" value="2" /> Occasionally<br/>
		<input type="radio" name="time" value="3" /> Only when I&#39;m out<br/>

		<input type="submit" name="submitit" onclick="valbutton(PhoneChoice);return false;" value=" Find Out " />
		<input type="reset" name="reset" value="Start Again" />
		<br/>
		
		</fieldset>
	</form>
		</div>		
	 </div>
	<!-- Start Left AT Bar -->	 
	<?php  include 'atBar.php';?>
	<!--End Left AT Bar -->
	</div>

	<!-- Start Footer Bar -->	 
	<?php  include 'footer.php';?>
	<!--End Footer Bar -->

</div>
</body>
</html>