<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_del_oit.php" method="POST">
<table><tr>
				<td>Order ID</td>
				<td><input type="text" name="orid"  placeholder="Integer" required ></td></tr>
				<tr>
				<td>ITEM ID</td>
				<td><input type="text" name="itd"  placeholder="Integer" required ></td></tr>
				<tr>
				<td>Quantity</td>
				<td><input type="text" name="qt"   placeholder="Integer" required ></td>
		</tr>
		<tr>
				<td>Use Input field</td>
				<td><input type="radio" name="rbvalue" value="Order_Id">Order ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Item">Item ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Qty">Quantity</td>
	    </tr>
		
</table>
<button type="submit" name="submit" >OK</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>