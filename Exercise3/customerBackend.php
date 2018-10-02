<?php
	$I1 = $_POST['Item1'];
	$I2 = $_POST['Item2'];
	$I3 = $_POST['Item3'];
	$pass = $_POST['PASS'];
	$I1P = $I1 * 25;
	$I2P = $I2 * 75;
	$I3P = $I3 * 199.99;
	$ship = $_POST['ship'];
	if($ship == "7 Day"){
		$shipc=0.00;
	}
	if($ship == "3 Day"){
		$shipc=5.00;
	}
	if($ship == "Express"){
		$shipc=50.00;
	}
	$tot=$shipc +$I1P+$I2P+$I3P;
	echo "
    <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">
	<header>Transaction Complete</header>
	<p>Thank you for shopping with us today at chair store we hope you found everything you needed.<br><br>
	Your password was: {$pass}<br><br>
	Receipt</p><br>
	<table>
		<tr>
			<th></th>
			<th>Quantity</th>
			<th>Cost Per Item</th>
			<th>Sub Total</th>
		<tr>
			<td>Low End Chair</td>
			<td class = \"blue\">{$I1}</td>
			<td class = \"blue\">$25.00</td>
			<td class = \"blue\">";echo '$';echo "{$I1P}</td>
		<tr>
			<td>Normal Chair</td>
			<td class = \"blue\">{$I2}</td>
			<td class = \"blue\">$75.00</td>
			<td class = \"blue\">";echo '$';echo "{$I2P}</td>
		<tr>
			<td>High End Chair</td>
			<td class = \"blue\">{$I3}</td>
			<td class = \"blue\">$199.99</td>
			<td class = \"blue\">";echo '$';echo "{$I3P}</td>
		<tr>
			<td>Shipping</td>
			<td class = \"blue\" colspan=\"2\">{$ship}</td>
			<td class = \"blue\">";echo '$';echo "{$shipc}</td>
		<tr>
			<td colspan=\"3\" class = \"floor\">Total Cost</td>
			<td class = \"floor\">";echo '$';echo "{$tot}</td>
	</table><br>";
 ?>
