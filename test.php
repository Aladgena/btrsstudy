<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?><?$APPLICATION->IncludeComponent(
	"s1:date.current",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"TEMPLATE_FOR_DATE" => "Y-m-d"
	)
);?>

<? $APPLICATION->IncludeComponent("s1:feedback.error", "template1", Array(
	
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>