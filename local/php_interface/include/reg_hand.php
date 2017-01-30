<?
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
AddEventHandler("main", "OnAfterUserRegister", "blockyandexmail");

    function OnBeforeUserRegisterHandler(&$arFields)
    {
                if (stripos($arFields["EMAIL"],'@mail.ru' )  === FALSE and (stripos($arFields["EMAIL"],'@list.ru' ) === FALSE ))
                {
                    echo 'SUCCESS';

                }
                else{
                    $GLOBALS['APPLICATION']->ThrowException('Please, use another domain');
                    return false;
                }
    }
?>