<?
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
AddEventHandler("main", "OnAfterUserRegister", "blockyandexmail");

    function OnBeforeUserRegisterHandler(&$arFields)
    {
		$rsUsers = CUser::GetList(($by="ID"), ($order="desc")); // выбираем пользователей
		my_dump($rsUsers);
		while($rsUsers->NavNext(true, "f_")) :
			echo "[".$f_ID."]---(".$f_LOGIN.")---".$f_NAME."---".$f_LAST_NAME."<br>";
		endwhile;
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