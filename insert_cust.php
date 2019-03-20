<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_cust.php" method="POST">
<table><tr>
				<td>Customer ID</td>
				<td><input type="text" name="cust_id"  placeholder="Integer" required ></td></tr>
				<tr>
				<td>Customer Name</td>
				<td><input type="text" name="cn"  placeholder="Name Surname" required ></td></tr>
				<tr>
				<td>Customer Address</td>
				<td><input type="text" name="ct"  placeholder="Cityname" required ></td>
		</tr>
		
</table>
<button type="submit" name="submit" >SUBMIT</button>
<button type="button" onclick="history.back(-1)" >Back</button>

</form>	

<?php
include_once 'footer.php';
?>