<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $ctname = mysqli_real_escape_string($conn,$_POST['ct']);
	$sql= "SELECT shipment.Order_Id As Orderlist FROM shipment INNER JOIN warehouse on shipment.Warehouse=warehouse.Warehouse and warehouse.city='$ctname';";
	$result= $conn->query($sql);
		if($result->num_rows>0){
	echo "<h1>ORDER FROM ".$ctname."</h1>";
	echo "<table border='2'><tr><th>ORDER LIST</th></tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row["Orderlist"]."</td>";	
		}
		echo "</table>";
		}
		else
		echo "<h1>Sorry no data found in this table for the ".$ctname." Try again</h1>";
	
		}
	include_once 'footer.php';