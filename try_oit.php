<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $c_id = mysqli_real_escape_string($conn,$_POST['orid']);
	 $itid=mysqli_real_escape_string($conn,$_POST['itd']);
	$sql="SELECT *from order_item where Order_Id='$c_id' and Item='$itid';";
	$result= $conn->query($sql);
	if($result->num_rows>0){
	echo "<h1>sorry order id=".$c_id." and Item id=".$itid." already exist</h1>";
	}
	else
	{
	 
	  $qty=mysqli_real_escape_string($conn,$_POST['qt']);
	  $sql="INSERT INTO `order_item` (`Order_Id`, `Item`, `Qty`) VALUES ('$c_id', '$itid', '$qty');";
	  $result= $conn->query($sql);
	  if(mysqli_error($conn))
		  echo "error=".mysqli_error($conn);
	  else
	  echo "<h2> Inserted Successfully</h2>";
	}
	}
	include_once 'footer.php';