<?php
namespace CliModules\Install;
use Druto\Cli\DrutoCli;
class InstallCommand extends DrutoCli
{
	public function index()
	{
		p($this->params);
		$this->display->msg("Help Command");
	}
	public function widget()
	{
		$widgetName=$this->params[count($this->params) -1];
		$this->display->msg("Installing ".$widgetName);
		$command="cd ".WIDGETSDIR." && git clone https://github.com/".$widgetName.".git";
		echo exec($command);
	}
}