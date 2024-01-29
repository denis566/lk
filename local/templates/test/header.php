<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>



	<title><?$APPLICATION->ShowTitle()?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <?
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/myscripts.js");
    ?>
</head> 
<body>


<div id="panel"><?$APPLICATION->ShowPanel();?></div>


<header class="header">
    <div class="container header__content">
        <div class="header__user">Пользователь: Admin</div>
        <div class="header__balance">Текущий баланс: <span>1000 руб.</span></div>
    </div>


</header>