<?
/** 
 * все падает сюда
 */
chdir(dirname(__DIR__));
require 'init_autoloader.php';

echo Craz\TestClass::foo();

echo Utils\Route\Route::foo();