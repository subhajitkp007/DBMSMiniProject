<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	$sql= "SELECT *FROM order_table";
	$result= $conn->query($sql);
	echo "<h1>ORDER TABLE DATA</h1>";
	echo "<table border='1'><tr><th>OREDER ID</th><th>ORDER DATE</th><th>CUSTOMER ID</th><th>ORDER AMMOUNT</th></tr>";
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
        echo "<tr>";
		echo "<td>".$row["Order_Id"]."</td>";
		echo "<td> ".$row["Odate"]."</td>";
		echo "<td> ".$row["Cust"]."</td>";
		echo "<td> ".$row["OAmt"]."</td>";
		echo "</tr>";
		}
	}
	echo "</table>";
	include_once 'footer.php';
	?>

