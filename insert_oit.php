<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_oit.php" method="POST">
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
		
</table>
<button type="submit" name="submit" >SUBMIT</button>	
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>