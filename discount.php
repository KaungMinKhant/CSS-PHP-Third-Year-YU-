<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<?php if (isset($_POST["submit"])) {
		$description = $_POST["description"];
		$price = $_POST["price"];
		
		$quantity = $_POST["quantity"];
		//echo $description." ".$price." ".$quantity;
		$amount = $price * $quantity;
		echo $amount." ";
		//$discount = $amount * (20/$amount);
		//echo " ".$discount;
		if($amount > 10000 and $amount <= 30000){
			$discount = $amount * (10/100);
			
			
		}
		elseif($amount > 30000 and $amount <= 50000){
			$discount = $amount * (15/100);
			
			
		}
		elseif($amount > 50000){
			$discount = $amount * (20/100);
			
			
		}
		elseif ($amount <= 10000) {
			$discount = 0;
		}
		echo $discount;
		$net_amount = $amount - $discount;
		$_POST["amount"] = $amount;
		$_POST["discount"] = $discount;
		$_POST["net_amount"] = $net_amount;
	} 
		?>
	 
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $description ?>"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="<?php echo $price ?>"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" value="<?php echo $quantity ?>"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="text" name="amount" value="<?php echo $amount; ?>"></td>
			</tr>
			<tr>
				<td>Discount</td>
				<td><input type="text" name="discount" value="<?php echo $_POST["discount"]; ?>" ></td>
			</tr>
			<tr>
				<td>Net Amount</td>
				<td><input type="text" name="net_amount" value="<?php echo $_POST["net_amount"]; ?>"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>