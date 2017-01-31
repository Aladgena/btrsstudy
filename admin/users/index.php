<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователи");
?>Раздел пользователей<br/><br/>
<?
/*$filter = Array
(
);
*/
$rsUsers = CUser::GetList(($by="ID"), ($order="desc")); // выбираем пользователей
my_dump($rsUsers);
//$is_filtered = $rsUsers->is_filtered; // отфильтрована ли выборка ?

?>
<table border="1" cellspacing="0" cellpadding="17" width="450">
<thead><th> ID </th><th> LOGIN </th><th> FIRSTNAME </th><th>LASTNAME</th></thead>
<?
while($rsUsers->NavNext(true, "f_")) :
?>
	<tr height="20"><td align="center">
	<?
		echo $f_ID."</td><td align='center'>";
		echo '<a href="/admin/users/detail.php?ID='.$f_ID.' ">'.$f_LOGIN."</a></td><td align='center'>";
		echo $f_NAME."</td><td align='center'>";
		echo $f_LAST_NAME."</td>";
	?>	
	</tr>
<?
endwhile;
?>
</table>
<?
/*while($rsUsers->NavNext(true, "f_")) :
    echo "[".$f_ID."]---(".$f_LOGIN.")---".$f_NAME."---".$f_LAST_NAME."<br>";
endwhile;
*/
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>