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
	<td>Ввести подразделение</td><td><input name="podr_form" pattern="(^[А-Яа-яЁё\s]+$)" required></td>
	</tr><tr>
	<td colspan=2><input type="submit" name="sbm" value="Записать"></td>
	</tr>
	</form>
	</table>

<?php

	
	if (isset($_POST['sbm']))
	{
	$otdel=$mysqli->real_escape_string($_POST['podr_form']);
	$query="insert podr(nazv_podr) values ('{$otdel}')";
	$result=$mysqli->query($query);
	if ($mysqli->affected_rows>0)
		echo '<p style="color: #32DC2A">Данные добавлены успешно </p>';
	else
		echo "<p>Что-то пошло не так ".$mysqli->error;
	$mysqli->close();
	}

	require_once("footer.php");

?>