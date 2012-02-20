<?php
  // starts a session 
  session_start();
  
  // how to include a php file, better to have them in same folder, less complicated
 //include('trixie.php');

 $con = mysql_connect("mysql1.mylogin.ie","fishy","Niamh"); // database domain, username, pass
  
  // if cannot connect, display error message
  if (!$con)
  {
	 die('Could not connect: ' . mysql_error());
  }
  
  // databse name you are using
  mysql_select_db("robert5_election", $con);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div id="form">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2>Login Form</h2>
	<ul>
	<li>Name</li>
	<li><input type="" value="" name="firstname" title="your name here" /></li>
	<li>Email</li>
	<li><input type="" value="" name="email" /></li>
    <li>Password (Max 6 characters)</li>
	<li><input type="password" value="" name="pass" /></li>
	<li><button type="submit">Submit</button></li>
	</ul>
	</form>
    </div>

	<?php
	$firstname = $_POST["firstname"];
	$email = $_POST["email"];
	$age = $_POST["age"];
	$pass = $_POST["pass"];
	//$date = date('j M y');
	
	
	if($email != '')
	{
    		// query table to select all rows where the field email is equal to $email
			$check_email = mysql_query("SELECT name FROM scallyporn WHERE name='$firstname'");
			$check_pass = mysql_query("SELECT pass FROM scallyporn WHERE password='$pass'");
			$count_pass = mysql_num_rows($check_pass);
			$count_email = mysql_num_rows($check_email);
		
			if($count_pass == 1 && $count_email == 1)
			{
				if($firstname == "admin")
				{
					// future reference about sessions
					//$_SESSION['user'] = $user;
					
					// redirect to thankyou.php if data has been successfully addded to table
					header("location:admin_page.php");	
				}
			//	else if()
				//{
					// ............	
					
			//	}
			}
			else if($count == '0')
			{     
				$ip = $_SERVER['REMOTE_ADDR'];
				$result = mysql_query("INSERT INTO petition (firstname, email, ip, message, sign_date) VALUES ('$firstname', '$email', '$ip', '$message', NOW())");
			 
			 	// redirect to thankyou.php if data has been successfully addded to table
				header("location:thankyou.php");
			}
	}
?>
</body>
</html>