<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	$sql= "SELECT Customer.Cname As Name,AVG(order_table.OAmt) AS avarage,count(order_table.Cust) AS counter FROM order_table INNER JOIN customer on order_table.Cust=customer.Cust GROUP BY(customer.Cust) ;";
	$result= $conn->query($sql);
	echo "<h1 style='background-color:black'>LISTING DATA</h1>";
	    echo "<table border='1' ><tr><th>CUSTOMER NAME</th><th>NO OF ORDER </th><th>AVRAGE AMOUNT OF ORDER</th></tr>";
	if($result->num_rows>0){
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>".$row["Name"]."</td>";
		echo "<td> ".$row["counter"]."</td>";
		echo "<td> ".$row["avarage"]."</td></tr>";
		
		}
		
		}
		echo "</table>";
		include_once 'footer.php';
		