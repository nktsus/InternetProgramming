<?php
	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	if (isset($_POST['sbm']))
	{
		$redpodr=$mysqli->real_escape_string($_POST['podr_form']);
		$query="update podr set nazv_podr='{$redpodr}' where kod_podr={$_GET['kod_podr']}";
		$result=$mysqli->query($query);
		if ($mysqli->affected_rows>0)
			echo "<p>Данные изменены успешно";
		else
			echo "<p>Что-то пошло не так ".$mysqli->error;
	}

	$query="select * from podr where kod_podr={$_GET['kod_podr']}";
	$resultSotr=$mysqli->query($query);
	$rowSotr=$resultSotr->fetch_assoc();
	
?>

	<table border=0>
	<form action="edit_podr.php?kod_podr=<?=$rowSotr['kod_podr']?>" method="post">
	<tr>
	<td>Введите подразделение<td><input name="podr_form" size=50 value='<?php echo $rowSotr['nazv_podr'];?>'>
	<tr>
	<td colspan=2><input type="submit" name="sbm" value="Записать">
	</form>
	</table>

<?php

	require_once("footer.php");

?>


