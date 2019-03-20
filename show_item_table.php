<?php
    include_once 'mysql_connector.php';
	$sql= "SELECT *FROM item";
	include_once 'upper.php';
	$result= $conn->query($sql);
	echo "<h1>ITEM TABLE DATA</h1>";
	echo "<table border='1'><tr><th>ITEM</th><th>PRICE</th></tr>";
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
        echo "<tr>";
		echo "<td>".$row["Item"]."</td>";
		echo "<td> ".$row["Price"]."</td>";
        echo "</tr>";
		}
	}
	echo "</table>";
	include_once 'footer.php';