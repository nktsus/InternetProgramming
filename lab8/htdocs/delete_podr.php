<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	echo "<table border=1>";
	echo "<tr><th>Подразделение<th>Удалить</tr>";
	$query="select * from podr";
	$result=$mysqli->query($query);
	while ($row=$result->fetch_assoc()){
		echo "<tr>";
		echo"<td>".$row['nazv_podr']."</td>";
		echo"<td><a href='delete_podr_get.php?kod_podr=".$row['kod_podr']."'>Удалить</a></td>";
		echo "</tr>";
	}	
	
	echo "</table>";


	require_once("footer.php");

?>