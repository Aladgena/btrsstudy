<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователи");
?>Раздел пользователей<br/><br/>
<?
$filter = Array
(
);

$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $filter); // выбираем пользователей

$is_filtered = $rsUsers->is_filtered; // отфильтрована ли выборка ?

$rsUser = CUser::GetByID(2);
$arUser = $rsUser->Fetch();
echo "<pre>"; print_r($arUser); echo "</pre>";

?>
<table border="1" cellspacing="0" cellpadding="17" width="450">
<?
while($rsUsers->NavNext(true, "f_")) :
?>
	<tr height="20"><td align="center">
	<?
		echo $f_ID."</td><td align='center'>";
		echo "<a href='/user/profile.php?ID=2'>".$f_LOGIN."</a></td><td align='center'>";
		echo $f_NAME."</td><td align='center'>";
		echo $f_LAST_NAME."</td>";
	?>	
	</tr>
<?
endwhile;
?>
</table>
<?
while($rsUsers->NavNext(true, "f_")) :
    echo "[".$f_ID."]---(".$f_LOGIN.")---".$f_NAME."---".$f_LAST_NAME."<br>";	
endwhile;

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>