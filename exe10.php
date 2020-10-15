<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
</head>
<body>
	<?php 
	$hamburgers=array('Hamburger',4.95,2);
	$milkshake=array('Milkshake',1.95,1);
	$cola=array('Cola',0.85,1);
	$tax_rate=0.075;
	$pre_tax=0.16;

	$subtotal=($hamburgers[1]*$hamburgers[2]);
	$subtotal=$subtotal+($milkshake[1]*$milkshake[2]);
	$subtotal=$subtotal+($cola[1]*$cola[2]);
	$tax=$subtotal*$tax_rate;
	$tip=$subtotal*$pre_tax;
	$total=$subtotal+$tip+$tax;
	
	 ?>
	 <table border="" width="30%">
	 	<tr>
	 		<th>Item</th>
	 		<th>Price</th>
	 		<th>Qty</th>
	 		<th>Item Subtotal</th>
	 	</tr>
	 	<tr>
	 		<td><?php echo "$hamburgers[0]"; ?></td>
	 		<td><?php echo "$hamburgers[1]"; ?></td>
	 		<td><?php echo "$hamburgers[2]"; ?></td>
	 		<td><?php $ham_total=($hamburgers[1]*$hamburgers[2]); echo "$$ham_total"; ?></td>
		</tr>
		<tr>
			<td><?php echo "$milkshake[0]"; ?></td>
			<td><?php echo "$milkshake[1]"; ?></td>
			<td><?php echo "$milkshake[2]"; ?></td>
			<td><?php ($shk_total=$milkshake[1]*$milkshake[2] ); echo "$shk_total";?></td>
		</tr>
		<tr>
			<td><?php echo "$cola[0]"; ?></td>
			<td><?php echo "$cola[1]"; ?></td>
			<td><?php echo "$cola[2]"; ?></td>
			<td><?php ($cola_total=$cola[1]*$cola[2]); echo "$cola_total"; ?></td>
		</tr>

		<tr>
		<td colspan="3" align="right">Subtotal</td>
		<td><?php echo "$subtotal"; ?></td>
		</tr>

		<tr>
			<td colspan="3" align="right">Tax</td>
			<td><?php echo "$tax"; ?></td>
		</tr>

		<tr>
			<td colspan="3" align="right">Tip</td>
			<td><?php echo "$tip"; ?></td>
		</tr>

		<tr>
			<td colspan="3" align="right">Total</td>
			<td><?php echo "$total"; ?></td>
		</tr>
	 </table>
</body>
</html>