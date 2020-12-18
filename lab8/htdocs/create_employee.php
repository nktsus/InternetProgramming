<?php

	header("Content-Type: text/html; charset=UTF-8");

	require_once("header.php");
	require_once("nav.php");
	require_once("inc.php");
	require_once("mysql.php");

?>

	<table border=0>
	<form action="" method="post">
	<tr>
	<td>Введите ФИО</td><td><input name="fio_form" pattern="^([а-яА-Яa-zA-Z]+\s){1,2}[а-яА-Яa-zA-Z]+$" required></td>
	</tr><tr>
	<td>Введите должность</td><td><input name="dolj_form" required></td>
	</tr><tr>
	<td>Выберите отдел</td><td><select name="podr_form">

<?php

	$query="select * from podr";
	$result=$mysqli->query($query);
	while($row=$result->fetch_array())
	echo "<option value=".$row['kod_podr'].">".$row['nazv_podr']."</option>";
?>

	</select>
	</td>
	</tr><tr>
	<td>Введите зарплату</td><td><input name="zp_form" pattern="^\d+$" required></td>
	</tr><tr>
	<td colspan=2><input type="submit" name="sbm" value="Записать"></td>
	</tr>
	</form>
	</table>

<?php

	if (isset($_POST['sbm']))
	{
	$fio=$mysqli->real_escape_string($_POST['fio_form']);
	$dolj=$mysqli->real_escape_string($_POST['dolj_form']);
	$otdel=$mysqli->real_escape_string($_POST['podr_form']);
	$zp=$mysqli->real_escape_string($_POST['zp_form']);
	$query="insert worker(FIO, dolj, kod_podr, ZP) values('{$fio}','{$dolj}','{$otdel}','{$zp}')";
	$result=$mysqli->query($query);
	if ($mysqli->affected_rows>0)
		echo '<p style="color: #32DC2A">Данные добавлены успешно </p>';
	else
		echo "<p>Что-то пошло не так ".$mysqli->error;
	$mysqli->close();
	}

	require_once("footer.php");

?>