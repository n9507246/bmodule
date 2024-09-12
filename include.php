<?php
// Подключение автозагрузки классов
\Bitrix\Main\Loader::registerAutoLoadClasses('your.module', [
    '\Your\Namespace\ClassName' => 'lib/ClassName.php',
]);
