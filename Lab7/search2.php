<form action method="post">
	<p style="font-weight: bold"> Строка поиска </p>
	<input name="searchString">
	<p style ="font-weight: bold"> Ключ поиска </p>
	<select name="searchKey">
		<option value="1">Название</option>
		<option value="2">Цена</option>
		<option value="3">Количество</option>
	</select>
	<p><input type="submit" name="search" value="Искать">
</form>

<?php

	if (isset($_POST['search']))
	{
	echo "<table border=1>";
	echo "<tr><th>Код<th>Название<th>Количество<th>Цена<th>Дополнительная информация</tr>";
	echo "<tr>";

	foreach ($tovars as $tovar)
	{
		switch ($_POST['searchKey'])
		{

			case 1:
				if (mb_stristr($tovar['nazv_t'], $_POST['searchString'], false, 'UTF-8'))
					foreach ($tovar as $key=>$value)
					echo"<td>".$value; 

			
			break;

			case 2:
			if ($_POST['searchString']==$tovar['price'])
			{
				foreach ($tovar as $key=>$value)
					echo"<td>".$value; 
				
			}
			break;

			case 3:
			if (strcasecmp($_POST['searchString'],$tovar['kolvo'])==0)
			{
				foreach ($tovar as $key=>$value)
					echo"<td>".$value;
					
			}
			break;

		}
	}
	echo "</tr>";
	} 


?>