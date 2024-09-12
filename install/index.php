<?php
use Bitrix\Main\ModuleManager;

class your_module extends CModule
{
    public function __construct()
    {
        $this->MODULE_ID = 'your.module';
        $this->MODULE_NAME = 'Мой модуль';
        $this->MODULE_DESCRIPTION = 'Описание модуля';
        $this->MODULE_VERSION = '1.0.0';
        $this->MODULE_VERSION_DATE = '2024-09-12';
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
    }
}
