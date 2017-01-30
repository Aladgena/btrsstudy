<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница админа");
?>
<?
$a = array(2,3,4);
my_dump($a);
//reg_hand($a);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>