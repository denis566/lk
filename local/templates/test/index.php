<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
<h1>test</h1>
<?$APPLICATION->IncludeComponent("startshop:slider", "best", Array(
   "AJAX_MODE" => "N",
      "AJAX_OPTION_ADDITIONAL" => "",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "FIELD_CODE" => array(
         0 => "DETAIL_PICTURE",
         1 => "",
      ),
      "IBLOCK_ID" => "13",   // Инфобок
      "IBLOCK_TYPE" => "StartShop",  // Тип инфоблока
      "PROPERTY_CODE" => "size", // Укажите свойство по которому будет фильтроваться товары для слайдера
      "COMPONENT_TEMPLATE" => ".default"
   ),
   false
);?>