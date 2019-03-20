<?php
    include_once 'mysql_connector.php';
	include_once 'upper.php';
	if(isset($_POST['submit'])){
    $it_id = mysqli_real_escape_string($conn,$_POST['it_id']);
	$sql="SELECT *from customer where Cust='$it_id';";
	$result= $conn->query($sql);
	if($result->num_rows>0){
	echo "<h1>sorry ".$it_id." already exist</h1>";
	}
	else
	{
	  $price=mysqli_real_escape_string($conn,$_POST['pri']);
	  $sql="INSERT INTO `item` (`Item`, `Price`) VALUES ('$it_id', '$price');";
	  $result= $conn->query($sql);
	  if(mysqli_error($conn))
		  echo "error=".mysqli_error($conn);
	  else
	  echo "<h2> Inserted Successfully</h2>";
	}
	}
	include_once 'footer.php';