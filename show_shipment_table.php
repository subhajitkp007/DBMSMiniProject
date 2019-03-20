<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	$sql= "SELECT * FROM shipment";
	$result= $conn->query($sql);
	echo "<h1>SHIPMENT TABLE DATA</h1>";
	    echo "<table border='1'><tr><th>ORDER ID</th><th>WAREHOUSE ID</th><th>SHIPMENT DATE</th></tr>";
		
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
		echo "<tr>";
		echo "<td>".$row["Order_Id"]."</td>";
		echo "<td> ".$row["Warehouse"]."</td>";
		echo "<td> ".$row["Ship-date"]."</td>";
		echo "</tr>";
		}
		}
			echo "</table>";
	include_once 'footer.php';
		
	
		
	
