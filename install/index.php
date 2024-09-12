<?php
use Bitrix\Main\ModuleManager;

class your_module extends CModule
{
    public function __construct()
    {
        
        //получим путь до модуля
            $path = str_replace("\\", "/", __FILE__);
            $path = substr($path, 0, strlen($path) - strlen("/install/index.php"));

        //установка версии модуля
            include($path."/version.php");
            if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
            {
                $this->MODULE_VERSION = $arModuleVersion["VERSION"];
                $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
            }

        //оставльные данные модуля
        $this->MODULE_ID = 'your.module';
        $this->MODULE_NAME = 'Мой модуль ';
        $this->MODULE_DESCRIPTION = 'Описание модуля';
    }

    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
        $this->InstallDB();
        $this->InstallEvents();
        $this->InstallFiles();
    }

    public function DoUninstall()
    {
        $this->UnInstallFiles();
        $this->UnInstallEvents();
        $this->UnInstallDB();
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }

    public function InstallDB()
    {
        // Логика установки БД
    }

    public function InstallEvents()
    {
        // Логика установки событий
    }

    public function InstallFiles()
    {
        // Логика копирования файлов
        $sourcePath = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/your.module/install/';
        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/your.module/';
    
        // Копирование файлов
        CopyDirFiles($sourcePath . 'lib', $destinationPath . 'lib', true, true);
    }

    public function UnInstallDB()
    {
        // Логика удаления БД
    }

    public function UnInstallEvents()
    {
        // Логика удаления событий
    }

    public function UnInstallFiles()
    {
        // Логика удаления файлов
        $path = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/your.module/';

        // Удаление файлов и директорий
        DeleteDirFilesEx($path);
    }
}
