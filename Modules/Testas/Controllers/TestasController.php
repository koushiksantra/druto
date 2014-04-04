<?php
namespace Modules\Testas\Controllers;
use Druto\Controllers\Controller as Controller;
use Druto\Configs\Config as Config;
use Modules\Testas\Models\TestasModel as TestasModel;
class TestasController extends Controller
{
	public $restfull=true;
	
	public function getIndex()
	{
		$model=new TestasModel();
		$this->render->welcome=$model->getWelcomeMsg();
		$this->render->message="Welcome to Testas Module getIndex()";
		$this->render->template('Modules.Testas.Views.index',array());
	}
	public function postIndex()
	{
		$model=new TestasModel();
		$this->render->welcome=$model->getWelcomeMsg();
		$this->render->message="Welcome to Testas Module postIndex()";
		$this->render->template('Modules.Testas.Views.index',array());
	}
	public function putIndex()
	{
		$model=new TestasModel();
		$this->render->welcome=$model->getWelcomeMsg();
		$this->render->message="Welcome to Testas Module putIndex()";
		$this->render->template('Modules.Testas.Views.index',array());
	}
	public function deleteIndex()
	{
		$model=new TestasModel();
		$this->render->welcome=$model->getWelcomeMsg();
		$this->render->message="Welcome to Testas Module deleteIndex()";
		$this->render->template('Modules.Testas.Views.index',array());
	}
}