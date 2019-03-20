<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $w_id = mysqli_real_escape_string($conn,$_POST['war_id']);
	$sql="SELECT *from customer where Cust='$w_id';";
	$result= $conn->query($sql);
	if($result->num_rows>0){
	echo "<h1>sorry warehouse id ".$w_id." already exist</h1>";
	}
	else
	{
	  $cty=mysqli_real_escape_string($conn,$_POST['ct']);
	  $sql="INSERT INTO `warehouse` (`Warehouse`, `City`) VALUES ('$w_id', '$cty');";
	  $result= $conn->query($sql);
	  if(mysqli_error($conn))
		  echo "error=".mysqli_error($conn);
	  else
	  echo "<h2> Inserted Successfully</h2>";
	}
	}
	include_once 'footer.php';