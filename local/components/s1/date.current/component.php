<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$arResult['DATE'] = date('Y-m-d');
$arResult['DATE'] = date($arParams["TEMPLATE_FOR_DATE"]);
?>
<?
// Проверка и инициализация входных параметров
if ($arParams["ID"] <= 0)
   $arParams["ID"] = 10;

$arParams["CACHE_TIME"] = 1200;

$cache = new CPHPCache;
if ($cache->StartDataCache($arParams["CACHE_TIME"], false, "/".SITE_ID.$this->GetRelativePath()))
{
   // Запрос данных и формирование массива $arResult
   $arResult = array("a" => 1, "b" => 2);

   // Подключение шаблона компонента
   $this->IncludeComponentTemplate();
	echo "Params";
	my_dump($arParams);
	echo "Result";
	my_dump($arResult);
	
   $templateCachedData = $this->GetTemplateCachedData();

   $cache->EndDataCache(
      array(
         "arResult" => $arResult,
    "templateCachedData" => $templateCachedData
      )
   );
}
else
{
   extract($cache->GetVars());
   $this->SetTemplateCachedData($templateCachedData);
}
?>
<?
$this->IncludeComponentTemplate();
?>