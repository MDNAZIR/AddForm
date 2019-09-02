<?php
	include('database.php');


$result = mysql_query("SELECT * FROM patients");
$num_rows = mysql_num_rows($result);
  if ($num_rows > 0) 
    {                 
		echo "<table border=1>
	             <tr>
		<th> Doctor Name</th>
		<th>Doctor Mobile</th>	
		<th>Doctor Address</th>
		<th>Doctor Exprience</th>		
		<th>Doctor Payment</th>		
		</tr>";
		while($row = mysql_fetch_array($result))
		 {
			  echo "<tr>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "<td>" . $row['mobile'] . "</td>";	
			  echo "<td>" . $row['address'] . "</td>";
			  echo "<td>" . $row['exprience'] . "</td>";
			  echo "<td>" . $row['payment'] . "</td>";		  
			  echo "</tr>";
		}
		        echo "</table>";
  }
	else
  {
	             print "<h3>wrong input</h3>";
	  }
	     mysql_close($conn);
?> 
