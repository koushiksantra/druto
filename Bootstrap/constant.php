<?php
/**
*Set up Path Constant
**/
define('Druto',True);
define('APPDIR',__DIR__.'/..');
define('MODULESDIR',__DIR__.'/../Modules');
define('CONFIGSDIR',__DIR__.'/../Configs');
/**
*Setting Up URL Constant
**/
define('CURRENTURL',sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['HTTP_HOST'],$_SERVER['REQUEST_URI']));
define('BASEURL',str_replace($_SERVER['REQUEST_URI'], '', CURRENTURL));