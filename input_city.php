<?php
include_once 'upper.php';
?>
<form class="form-inner" action="xcity.php" method="POST">
<table><tr>
				<td>Enter CITY NAME</td>
				<td><input type="text" name="ct"  placeholder="cityname" required ></td>
		</tr>
		
</table>
<button type="submit" name="submit" >FIND</button>
<button type="button" onclick="history.back(-1)" >Back</button>
</form>	

<?php
include_once 'footer.php';
?>