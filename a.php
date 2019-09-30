<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multi Dimensional Array</title>
	<?php 
	$array = array(array("00", "01", "02"), array(10, 11, 12), array(20, 21, 22))
	 ?>
	 <style>
	 	table, th, td, tr{
	 		border: solid 1px black;

	 	}
	 	table{
	 		border-collapse: collapse;
	 	}

	 	}
	 </style>
</head>
<body>
	<table>
		<tr>
			<th>Roll No</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
		<?php 
			for ($i=0; $i < count($array); $i++) { 
				echo "<tr>";
				for($j = 0; $j < count($array); $j++){
					echo "<td>".$array[$i][$j]."</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>