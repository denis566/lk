<?
CModule::AddAutoloadClasses(
    '', // не указываем имя модуля
    array(
        // ключ - имя класса с простанством имен, значение - путь относительно корня сайта к файлу
        'SomePartner\MyBooksCatalog\BookTable' => '/local/modules/somepartner.mybookscatalog/lib/book.php',
    )
);