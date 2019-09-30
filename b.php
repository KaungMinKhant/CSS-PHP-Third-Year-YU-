<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td, th{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php 
		$quantity = array('10','20','30','40','50','60','70','80','90','100');
	 ?>	

	 <table style="border: 1px solid black">
	 	<tr>
	 		<th>Quantity</th>
	 		<th>Price</th>
	 	</tr>
	 	<?php 
	 		foreach ($quantity as $q) { 
	 			# code...
	 			$price= $q*5;
	 			echo "<tr>";
	 			echo "<td>".$q."</td>";
	 			echo "<td>".$price."</td>";
	 			echo "<tr>";
	 		}

	 	 ?>
	 	
	 </table>
</body>
</html>