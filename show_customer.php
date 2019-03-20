<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	$sql= "SELECT Cust,Cname,City FROM customer";
	$result= $conn->query($sql);
	echo "<h1>CUSTOMER TABLE DATA</h1>";
	    echo "<table border='1'><tr><th>CUSTOMER ID</th><th>CUSTOMER NAME</th><th>CUSTOMER CITY</th></tr>";
		
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
		echo "<tr>";
		echo "<td>".$row["Cust"]."</td>";
		echo "<td> ".$row["Cname"]."</td>";
		echo "<td> ".$row["City"]."</td>";
		echo "</tr>";
		}
	
	}
	echo "</table>";
	include_once 'footer.php';