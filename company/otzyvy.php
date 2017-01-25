<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заголовок окна браузера");
$APPLICATION->SetPageProperty("keywords", "Отзывы,компания");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>

<?$APPLICATION->SetPageProperty("description", "Отзывы о компании 2"); ?>
<p>Заголовок - <?$APPLICATION->ShowTitle()?>;
<p>Заголовок 2 - <?$APPLICATION->ShowTitle(false)?>;
<p>title - <?$APPLICATION->ShowProperty("title")?>;
<p>keywords - <?$APPLICATION->ShowProperty("keywords")?>;
<p>description - <?$APPLICATION->ShowProperty("description")?>;





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>