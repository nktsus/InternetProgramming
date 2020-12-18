<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	$query="select * from podr where kod_podr={$_GET['kod_podr']}";
	$resultSotr=$mysqli->query($query);
	$rowSotr=$resultSotr->fetch_assoc();

	if (isset($_GET['kod_podr'])){
		$kod_podr=$_GET['kod_podr'];
		$queryCheck="select kod_worker from worker where kod_podr={$kod_podr}";
		$result=$mysqli->query($queryCheck);
		if ($result->num_rows>0)
			echo "Нельзя удалить подразделение, для которого зарегистрированы сотрудники";
		else {
			$query="delete from podr where kod_podr={$kod_podr}";
			$result=$mysqli->query($query);
			if ($mysqli->affected_rows>0)
				echo "<p>Данные удалены успешно";
			else
				echo "<p>Что-то пошло не так ".$mysqli->error;
			}
		}

	require_once("footer.php");

?>
