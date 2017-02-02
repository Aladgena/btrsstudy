<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arParams["CACHE_TIME"] = 1200;
if ($this->StartResultCache($arParams["CACHE_TIME"], false, "/".SITE_ID.$this->GetRelativePath()))
{
	$results = $DB->Query("SELECT ID, LOGIN, DATE_REGISTER FROM b_user ORDER BY DATE_REGISTER DESC LIMIT 3");

	$arResult=array();

	while ($row = $results->Fetch())
	{
		array_push($arResult, $row);
	}
	//my_dump($arResult);

	$this->IncludeComponentTemplate();
}	
?>