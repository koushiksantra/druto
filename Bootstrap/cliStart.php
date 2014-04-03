<?php
require_once __DIR__.'/constant.php';
require_once __DIR__.'/helper.php';
$loader=require __DIR__.'/../vendor/autoload.php';
$loader->add('Modules', __DIR__.'/../');
$loader->add('Widgets', __DIR__.'/../');
$loader->add('CliModules', __DIR__.'/../');
$drutoCli=new Druto\Cli\Cli();
return $drutoCli;