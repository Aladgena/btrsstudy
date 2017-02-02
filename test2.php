<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test2");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователи");
?>
<?
//echo "SELECT * FROM b_user WHERE DATE_REGISTER > NOW() - INTERVAL 1 DAY";


$results = $DB->Query("SELECT ID, LOGIN, DATE_REGISTER FROM b_user WHERE DATE_REGISTER > NOW() - INTERVAL 1 DAY ");

$arResult=array();

	while ($row = $results->Fetch())
	{
		array_push($arResult, $row);
	}
	
	//my_dump($arResult);
	$message = "<b>Регистрация за последние 24 часа: </b><br>";
	
	foreach ($arResult as $v1) {
		$message = $message." user:";
		foreach ($v1 as $v2) {
			$message = $message."-- ".$v2;
		}
		$message = $message."<br>";
	}
	echo "Отправлено админу сообщение<br><br>".$message;
    $arEventFields = array(
        "ID" => 's1',
        "MESSAGE" => $message,
        "EMAIL_TO" => implode(",", $arFields['EMAIL']));
    CEvent::Send("AFTER_REG", 's1', $arEventFields);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>