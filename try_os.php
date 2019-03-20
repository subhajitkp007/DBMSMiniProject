<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $ord_id = mysqli_real_escape_string($conn,$_POST['or_id']);
	$sql="SELECT *from order_table where Cust='$ord_id';";
	$result= $conn->query($sql);
	if($result->num_rows>0){
	echo "sorry Order Id=".$ord_id." already exist";
	}
	else
	{
	  $dte=mysqli_real_escape_string($conn,$_POST['dt']);
	  $c_id=mysqli_real_escape_string($conn,$_POST['cust_id']);
	  $amt=mysqli_real_escape_string($conn,$_POST['oamt']);
	  $sql="INSERT INTO `order_table` (`Order_Id`, `Odate`, `Cust`,`OAmt`) VALUES ('$ord_id', '$dte', '$c_id','$amt');";
	  $result= $conn->query($sql);
	  if(mysqli_error($conn))
		  echo "error=".mysqli_error($conn);
	  else
	  echo "<h2> Inserted Successfully</h2>";
	}
	}
	include_once 'footer.php';