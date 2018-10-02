<?php
	echo "<h1>Multiplication Table</h1>";
	echo "<table>";
	echo "<tr>";
	echo "<td></td>";
	for($i = 1; $i<=100; $i++){
		echo "<td>{$i}</td>";
	}
	echo "</tr>";
	for($i = 1; $i<=100; $i++){
		echo "<tr>";
		echo "<td>{$i}</td>";
		for($j = 1; $j <= 100; $j++){
			$mult = $i*$j;
			echo "<td>{$mult}</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
 ?>
