<?php
include_once 'upper.php';
?>
<form class="form-inner" action="try_del_war.php" method="POST">
<table><tr>
				<td>WareHouse id</td>
				<td><input type="text" name="war_id"  placeholder="Integer" ></td></tr>
				<td>ware house location</td>
				<td><input type="text" name="ct"  placeholder="cityname" ></td></tr>
				<tr>
				<td>Use Input field</td>
				<td><input type="radio" name="rbvalue" value="Warehouse">WareHouse id</td>
				</tr>
				<tr>
				<td></td>
				<td><input type="radio" name="rbvalue" value="City">ware house location</td>
				</tr>
				<tr>
		
</table>
<button type="submit" name="submit" >OK</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>