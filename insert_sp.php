<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_sp.php" method="POST">
<table><tr>
				<td>Order ID</td>
				<td><input type="text" name="or_id"  placeholder="Integer"required ></td></tr>
				<tr>
				<td>Warehouse ID</td>
				<td><input type="text" name="war_id"  placeholder="Integer" required ></td></tr>
				<tr>
				<td>order Date</td>
				<td><input type="date" name="dt"  placeholder="dd-mm-yyyy" required ></td></tr>
</table>
<button type="submit" name="submit" >SUBMIT</button>	
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>