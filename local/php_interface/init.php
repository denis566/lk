<?
CModule::AddAutoloadClasses(
    '', // не указываем имя модуля
    array(
        // ключ - имя класса с простанством имен, значение - путь относительно корня сайта к файлу
        'lib\test\SomeClass' => '/local/php_interface/lib/test/SomeClass.php',
         'SomePartner\MyBooksCatalog\BookTable' => '/local/modules/somepartner.mybookscatalog/lib/book.php',
         'SomePartner\MyBooksCatalog\HistoryTable' => '/local/modules/somepartner.mybookscatalog/lib/history.php',
     
    )
);