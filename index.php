<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$loader=require __DIR__.'/vendor/autoload.php';
$loader->add('Modules', __DIR__);

$druto=new Druto\Druto(__DIR__);
$druto->init();


// $b=new Modules\Blog\Controllers\BlogController();
// $a=new Druto\Controllers\Controller();
// echo $b->test();