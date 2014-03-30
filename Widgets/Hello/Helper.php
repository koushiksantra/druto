<?php
namespace Widgets\Hello;
use Modules\User\Models\Alam;
class Helper
{
	public static function test()
	{
		$alam=new Alam();
		return "From Widget Hello Helper ".$alam->who();
	}
}