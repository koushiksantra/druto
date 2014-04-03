<?php
/**
*Set up Path Constant
**/
define('Druto',True);
define('DS',DIRECTORY_SEPARATOR);
define('APPDIR',__DIR__.'/..');
define('MODULESDIR',__DIR__.'/../Modules');
define('WIDGETSDIR',__DIR__.'/../Widgets');
define('TEMPLATESDIR',__DIR__.'/../Templates');
define('CONFIGSDIR',__DIR__.'/../Configs');
/**
*Setting Up URL Constant
**/
if(!isset($_SERVER['HTTPS']))
{
	$_SERVER['HTTPS']='off';
}
if(!isset($_SERVER['HTTP_HOST']))
{
	$_SERVER['HTTP_HOST']='localhost';
}
if(!isset($_SERVER['REQUEST_URI']))
{
	$_SERVER['REQUEST_URI']='/';
}
define('CURRENTURL',sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['HTTP_HOST'],$_SERVER['REQUEST_URI']));
define('BASEURL',str_replace($_SERVER['REQUEST_URI'], '', CURRENTURL));