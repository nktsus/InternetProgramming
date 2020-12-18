<?php
	require_once("inc.php");
	$mysqli = new mysqli($host, $user, $pwd, $db);
	if ($mysqli->connect_errno){
    echo '<p style="color: red"> Не удалось подключиться к MySQL: </p>' . $mysqli->connect_error;}
	else{
		echo '<p style="color: #32DC2A"> Mysql ok </p>';
	}
	$mysqli->set_charset("utf8");
?>
