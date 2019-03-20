<?php
    include_once 'mysql_connector.php';
	$sql= "SELECT * FROM order_item";
	include_once 'upper.php';
	$result= $conn->query($sql);
	echo "<h1>ORDER ITEM TABLE DATA</h1>";
	    echo "<table border='1'><tr><th>ORDER ID</th><th>ITEM ID</th><th>QUANTITY</th></tr>";
		
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
		echo "<tr>";
		echo "<td>".$row["Order_Id"]."</td>";
		echo "<td> ".$row["Item"]."</td>";
		echo "<td> ".$row["Qty"]."</td>";
		echo "</tr>";
		}
		}
	echo "</table>";
	include_once 'footer.php';
		
		
	
