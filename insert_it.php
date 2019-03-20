<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_it.php" method="POST">
<table><tr>
				<td>Item ID</td>
				<td><input type="text" name="it_id"  placeholder="Integer" required ></td></tr>
				<tr>
				<td>Customer Name</td>
				<td><input type="text" name="pri"  placeholder="Integer" required ></td>
				
		</tr>
		
</table>
<button type="submit" name="submit" >SUBMIT</button>
<button type="button" onclick="history.back(-1)" >Back</button>	

</form>	

<?php
include_once 'footer.php';
?>