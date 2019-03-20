<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $c_id = mysqli_real_escape_string($conn,$_POST['cust_id']);
	$sql="SELECT *from customer where Cust='$c_id';";
	$result= $conn->query($sql);
	if($result->num_rows>0){
	echo "<h1>sorry customer id=".$c_id." already exist</h1>";
	}
	else
	{
	  $cna=mysqli_real_escape_string($conn,$_POST['cn']);
	  $cty=mysqli_real_escape_string($conn,$_POST['ct']);
	  $sql="INSERT INTO `customer` (`Cust`, `Cname`, `City`) VALUES ('$c_id', '$cna', '$cty');";
	  $result= $conn->query($sql);
	  if(mysqli_error($conn))
		  echo "error=".mysqli_error($conn);
	  else
	  echo "<h2> Inserted Successfully</h2>";
	}
	}
	include_once 'footer.php';