<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	echo "<table border=1>";
	echo "<tr><th>ФИО<th>Подразделение<th>Должность<th>Зарплата</tr>";
	$query="select * from worker, podr where worker.kod_podr=podr.kod_podr";
	
	$result=$mysqli->query($query);

	while ($row=$result->fetch_assoc())
	{
		echo "<tr>";
		echo"<td><a href='edit_sotr.php?kod_worker=".$row['kod_worker']."'>".$row['fio']."</a></td>";
		echo"<td>".$row['dolj']."</td>";
		echo"<td>".$row['nazv_podr']."</td>";
		echo"<td>".$row['zp']."</td>";
		echo "</tr>";
	}	

	echo "</table>";

	require_once("footer.php");

?>