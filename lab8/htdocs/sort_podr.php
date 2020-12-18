<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	echo "<table border=1>";
	echo "<tr><th>Код<th>Подразделение</tr>";
	$query="select * from podr order by nazv_podr";
	$result=$mysqli->query($query);
	while ($row=$result->fetch_assoc()){
		echo "<tr>";
		echo"<td>".$row['kod_podr']."</td>";
		echo"<td>".$row['nazv_podr']."</td>";
		echo "</tr>";
	}	
	
	echo "</table>";


	require_once("footer.php");

?>