<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	echo "<b>Последние три зарегистрировались:</b> <br><br>";
	echo "<table border='1' cellspacing='0' cellpadding='17' width='450'>";
    echo "<thead><th> ID </th><th> LOGIN </th><th> DATE_REGISTER </th></thead>";
	foreach ($arResult as $v1) {
		echo "<tr height='20'>";
		foreach ($v1 as $v2) {
			echo "<td align='center'>".$v2."</td>";
		}
	}
	echo "</table>";
?>