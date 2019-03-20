<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_del_os.php" method="POST">
<table> <tr>
				<td>Order ID</td>
				<td><input type="text" name="Orderid"  placeholder="Integer" ></td></tr>
				<tr>
				<td>order Date</td>
				<td><input type="date" name="Ordate"  placeholder="dd-mm-yyyy" ></td></tr>
				<tr>
				<td>Customer ID</td>
				<td><input type="text" name="customerid"  placeholder="Integer" ></td></tr>
				<tr>
				<td>Order Ammount</td>
				<td><input type="text" name="OrderAmt"  placeholder="Integer"  ></td>
				</tr>
				<tr>
				<td>Use Input field</td>
				<td><input type="radio" name="rbvalue" value="Order_Id">Order ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Odate">Order Date</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Cust">Customer ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="OAmt">Order Ammount</td>
				</tr>

		
</table>
<button type="submit" name="submit" >OK</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>