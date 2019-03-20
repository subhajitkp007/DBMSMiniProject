<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $ord_id = mysqli_real_escape_string($conn,$_POST['or_id']);
	$w_id=mysqli_real_escape_string($conn,$_POST['war_id']);
	$sql="SELECT *from shipment where Order_Id='$ord_id' and Warehouse='$w_id';";
	$result= $conn->query($sql);
	if($result->num_rows>0){
	echo "<h1>sorry order id ".$ord_id." and warhouse_id=".$w_id." already exist</h1>";
	}
	else
	{
	  $dte=mysqli_real_escape_string($conn,$_POST['dt']);
	  $sql="INSERT INTO `shipment` (`Order_Id`,`Warehouse`,`Ship-date`) VALUES ('$ord_id','$w_id','$dte');";
	  $result= $conn->query($sql);
	  if(mysqli_error($conn))
		  echo "error=".mysqli_error($conn);
	  else
	  echo "<h2> Inserted Successfully</h2>";
	}
	}
	include_once 'footer.php';