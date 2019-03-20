<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_war.php" method="POST">
<table><tr>
				<td>Ware House id</td>
				<td><input type="text" name="war_id"  placeholder="Integer" required ></td></tr>
				<td>ware house location</td>
				<td><input type="text" name="ct"  placeholder="cityname" required ></td></tr>
		
</table>
<button type="submit" name="submit" >SUBMIT</button>	
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>