<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$loader=require __DIR__.'/vendor/autoload.php';
$loader->add('Modules', __DIR__);
$b=new Modules\Blog\Controllers\BlogController();
$a=new Druto\Controllers\Controller();
echo $a->test();