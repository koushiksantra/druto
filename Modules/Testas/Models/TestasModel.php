<?php
namespace Modules\Testas\Models;
use Druto\Models\Model as Model;
class TestasModel extends Model
{
	public function getWelcomeMsg()
	{
		return "Welcome to Testas Module";
	}
}