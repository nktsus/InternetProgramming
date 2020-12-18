<?php
	header("Content-Type: text/html; charset=UTF-8");
	require_once("header.php");
	require_once("nav.php");
	require_once("array.php");
	echo "<table border=1>";
	echo "<tr><th>Код<th>Название<th>Количество<th>Цена<th>Дополнительная информация<th>Стоимость партии</tr>";
	foreach($tovars as $tovar) {
		echo "<tr>";
		foreach($tovar as $key=>$value){
			echo"<td>".$value;
		}
		echo"<td>".$tovar['kolvo']*$tovar['price'];
		$sum+=$tovar['kolvo'];
		echo "</tr>";
		}	
	echo "</table>";
	echo "<h2>Итого товаров на складе ".$sum." шт</h2>";
	require_once("footer.php");
?>