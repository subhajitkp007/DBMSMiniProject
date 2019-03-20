<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_del_sp.php" method="POST">
<table><tr>
				<td>Order ID</td>
				<td><input type="text" name="or_id"  placeholder="Integer" ></td></tr>
				<tr>
				<td>Warehouse ID</td>
				<td><input type="text" name="war_id"  placeholder="Integer"  ></td></tr>
				<tr>
				<td>order Date</td>
				<td><input type="date" name="dt"  placeholder="dd-mm-yyyy" ></td></tr>
				<tr>
				<td>Use Input field</td>
				<td><input type="radio" name="rbvalue" value="Order_Id">Order ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Warehouse">Warehouse ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Ship-date">order Date</td>
				</tr>
</table>
<button type="submit" name="submit" >OK</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>