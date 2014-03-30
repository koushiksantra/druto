<?php
use Druto\Configs\Config;
$aliases=Druto\Configs\Config::get('app.aliases',array());
foreach($aliases as $key=>$val)
{
	class_alias($val,$key);
}
