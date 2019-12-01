<?php

function getModuleName(string $moduleName)
{
    return app_path('Modules' . DS() . $moduleName . DS());
}

function DS()
{
    return DIRECTORY_SEPARATOR;
}

function loadRoute(string $fileName, string $moduleName)
{
    return getModuleName($moduleName) . 'routes' . DS() . $fileName . '.php';
}

function loadView(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'views';
}

function loadLang(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'lang';
}

function loadMigrations(string $moduleName)
{
    return getModuleName( $moduleName) . 'database' . DS() . 'migrations';
}

function loadConfigFile(string $fileName, string $moduleName)
{
    return getModuleName($moduleName) . 'config' . DS() . $fileName . '.php';
}