<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	echo "<table border=1>";
	echo "<tr><th>ФИО<th>Подразделение<th>Должность<th>Зарплата<th>Удалить</tr>";
	$query="select * from worker, podr where worker.kod_podr=podr.kod_podr";
	$result=$mysqli->query($query);
	while ($row=$result->fetch_assoc())
		{
			echo "<tr>";
			echo"<td>".$row['fio']."</td>";
			echo"<td>".$row['dolj']."</td>";
			echo"<td>".$row['nazv_podr']."</td>";
			echo"<td>".$row['zp']."</td>";
			echo"<td><a href='delete_sotr.php?kod_worker=".$row['kod_worker']."'>Удалить</a></td>";
			echo "</tr>";
		}	
	echo "</table>";


	if (isset($_GET['kod_worker'])){
		$kod_worker=$_GET['kod_worker'];
		$query="delete from worker where kod_worker={$kod_worker}";
		$result=$mysqli->query($query);
		if ($mysqli->affected_rows>0)
			echo "<p>Данные удалены успешно";
		else
		echo "<p>Что-то пошло не так ".$mysqli->error;
	}


	require_once("footer.php");

?>