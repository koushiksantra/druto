<?php
require_once __DIR__.'/constant.php';
require_once __DIR__.'/helper.php';
$loader=require __DIR__.'/../vendor/autoload.php';
$loader->add('Modules', __DIR__.'/../');
$druto=new Druto\Druto(__DIR__);
return $druto;