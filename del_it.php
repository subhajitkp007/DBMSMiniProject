<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_del_it.php" method="POST">
<table><tr>
				<td>Item ID</td>
				<td><input type="text" name="it_id"  placeholder="Integer" ></td></tr>
				<tr>
				<td>Price</td>
				<td><input type="text" name="pri"  placeholder="Integer" ></td>
				
		</tr>
		<tr>
				<td>Use Input field</td>
				<td><input type="radio" name="rbvalue" value="Item">Item ID</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="Price">Price</td>
		</tr>
		
</table>
<button type="submit" name="submit" >OK</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>