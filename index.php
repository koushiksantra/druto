<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$druto=require __DIR__.'/Bootstrap/start.php';
try {
	$druto->init();
} catch (Exception $e) {
	echo $e->getMessage();
}
