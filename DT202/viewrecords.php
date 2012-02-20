<?php
	
	include "icecream.php";
	
	$database = "kstgt";
	$db_found = mysql_select_db($database, $db);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<title>Records</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<h1> Kevin St's Got Tallent Registration Listings</h1>
<?php
if ($db_found) 
		{

			$SQL = "SELECT * FROM band_comp";
			$result = mysql_query($SQL);

			if (!$result) {
   				 echo "Error. " . mysql_error();
			} 
			else 
			{
				print "<table style='width: 100%'>";
					print "<tr>";
					print "<th>Act Name</th>";
					print "<th>Act Type</th>";
					print "<th>Act Contact</th>";
					print "<th>Student Number</th>";
					print "<th>College</th>";
					print "<th>Contact Number</th>";
					print "<th>Contact Email</th>";
					print "<th>Day Preferance</th>";
					print "<th>Other Info</th>";
					print "<th>Requirements</th>";
					print "</tr>";
				
				while ($db_field = mysql_fetch_assoc($result)) 
				{
					print "<tr>";
					print "<td>".$db_field['act_name'] . "</td>";
					print "<td>".$db_field['act_type'] . "</td>";
					print "<td>".$db_field['act_contact'] . "</td>";
					print "<td>".$db_field['stud_num'] . "</td>";
					print "<td>".$db_field['college'] . "</td>";
					print "<td>".$db_field['contact_num'] . "</td>";
					print "<td>".$db_field['contact_email'] . "</td>";
					print "<td>".$db_field['day_pref'] . "</td>";
					print "<td>".$db_field['other_mem_info'] . "</td>";
					print "<td>".$db_field['special_req'] . "</td>";
					print "</tr>";
				}
				print "</table>";
				mysql_close($db);
			}

		}
		else 
		{
			print "Database NOT Found ";
			mysql_close($db);
		}


?>

</body>

</html>


