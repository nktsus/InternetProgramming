<?php

	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

	if (isset($_POST['sbm']))
	{
		$fio=$mysqli->real_escape_string($_POST['fio_form']);
		$dolj=$mysqli->real_escape_string($_POST['dolj_form']);
		$podr=$mysqli->real_escape_string($_POST['podr_form']);
		$zp=$mysqli->real_escape_string($_POST['zp_form']);
		$query="update worker set fio='{$fio}', dolj='{$dolj}',kod_podr='{$podr}',zp='{$zp}' where kod_worker={$_GET['kod_worker']}";
		$result=$mysqli->query($query);
		if ($mysqli->affected_rows>0)
			echo "<p>Данные изменены успешно";
		else
			echo "<p>Что-то пошло не так ".$mysqli->error;
	}

	$query="select * from worker where kod_worker={$_GET['kod_worker']}";
	$resultSotr=$mysqli->query($query);
	$rowSotr=$resultSotr->fetch_assoc();



?>

	<table border=0>
	<form action="edit_sotr.php?kod_worker=<?=$rowSotr['kod_worker']?>" method="post">
	<tr>
	<td>Введите ФИО<td><input name="fio_form" size=50 value='<?php echo $rowSotr['fio'];?>'>
	<tr><td>Введите должность<td><input name="dolj_form"  size=50 value='<?php echo $rowSotr['dolj'];?>'>
	<tr><td>Выберите отдел</td><td><select name="podr_form">

<?php

	$query="select * from podr";
	$resultPodr=$mysqli->query($query);
	while($rowPodr=$resultPodr->fetch_array())
	{
		if ($rowPodr['kod_podr']==$rowSotr['kod_podr'])
		echo "<option value=".$rowPodr['kod_podr']." selected>".$rowPodr['nazv_podr']."</option>";
		else
		echo "<option value=".$rowPodr['kod_podr'].">".$rowPodr['nazv_podr']."</option>";
	}	
?>

	</select>
	<tr><td>Введите зарплату<td><input name="zp_form"  size=50 value='<?php echo $rowSotr['zp'];?>'>
	<tr><td colspan=2><input type="submit" name="sbm" value="Записать">
	</form>
	</table>

<?php

	require_once("footer.php");

?>


