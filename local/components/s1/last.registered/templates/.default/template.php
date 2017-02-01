<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	echo "<b>Последние три зарегистрировались:</b> <br><br>";
	foreach ($arResult as $v1) {
		foreach ($v1 as $v2) {
			echo "-- ".$v2;
		}
		echo "<br>";
	}
?>