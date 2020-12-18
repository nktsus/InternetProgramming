<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	$query="select * from worker where kod_worker={$_GET['kod_worker']}";
	$resultSotr=$mysqli->query($query);
	$rowSotr=$resultSotr->fetch_assoc();

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
