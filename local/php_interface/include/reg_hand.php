<?
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
AddEventHandler("main", "OnAfterUserRegister", "success_reg");

    function OnBeforeUserRegisterHandler(&$arFields)
    {
                if (stripos($arFields["EMAIL"],'@mail.ru' )  === FALSE and (stripos($arFields["EMAIL"],'@list.ru' ) === FALSE ))
                {
                    echo 'OKey';

                }
                else{
                    $GLOBALS['APPLICATION']->ThrowException('Please, use another domain');
                    return false;
                }
    }


	function success_reg(&$arFields)
    {
        if (stripos($arFields["EMAIL"],'@yandex.ru' )  === false)
            {
/*
$arFields = array(
    "ID"          => 124,
    "CONTRACT_ID" => 1,
    "TYPE_SID"    => "LEFT"
    );
CEvent::Send("ADV_BANNER_STATUS_CHANGE", array("ru", "en"), $arFields);
*/
// Очистка кеша
//$cache = new CPHPCache;
//$cache->ClearResultCache($additionalCacheID = False, $cachePath = False);


            $message = 'successful registration';
            $arEventFields = array(
                "ID" => 's1',
                "MESSAGE" => $message,
                "EMAIL_TO" => implode(",", $arFields['EMAIL']));
            CEvent::Send("AFTER_REG", 's1', $arEventFields);
            }
        else{
			echo 'Email from @yandex not send';
        }
    }

?>