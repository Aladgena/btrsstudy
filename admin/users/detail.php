<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователи");
?>
<?
$rsUser = CUser::GetByID($_GET['ID']);
$arUser = $rsUser->Fetch();
//echo "<pre>"; print_r($arUser); echo "</pre>";

echo " Профиль пользователя: ".$arUser[LOGIN]."<br/>";
echo "Имя: ".$arUser[NAME]."<br/>";
echo "Фамилия: ".$arUser[LAST_NAME]."<br/>";
echo "E-mail: ".$arUser[EMAIL]."<br/>";
echo "Дата регистрации: ".$arUser[DATE_REGISTER]."<br/>";
echo "<br/><a href='/admin/users/index.php'>Назад к списку пользователей</a>";

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>