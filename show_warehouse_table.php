<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	$sql= "SELECT *FROM warehouse";
	$result= $conn->query($sql);
	echo "<h1>WAREHOUSE TABLE DATA</h1>";
	echo "<table border='1'><tr><th>WAREHOUSE ID</th><th>CITY</th></tr>";
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>".$row["Warehouse"]."</td>";
		echo "<td> ".$row["City"]."</td></tr>";
        
		}
	}
		echo "</table>";
	include_once 'footer.php';