<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_del_cust.php" method="POST">
<table><tr>
				<td>Customer ID</td>
				<td><input type="text" name="cust_id"  placeholder="Integer"></td></tr>
				<tr>
				<td>Customer Name</td>
				<td><input type="text" name="cn"  placeholder="Name Surname"  ></td></tr>
				<tr>
				<td>Customer Address</td>
				<td><input type="text" name="ct"  placeholder="Cityname" ></td>
		   </tr>
		   <tr>
				<td>Use Input field</td>
				<td><input type="radio" name="rbvalue" value="Cust">Customer ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Cname">Customer Name</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="City">Customer Address</td>
				</tr>
</table>
<button type="submit" name="submit" >OK</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>