<?php
namespace CliModules\Create;
use Druto\Cli\DrutoCli;
class CreateCommand extends DrutoCli
{
	public function index()
	{
		p($this->params);
		$this->display->msg("Create Command Help");
	}
	public function widget()
	{
		if(isset($this->params[3]))
		{
			$widgetName=ucwords($this->params[count($this->params) -1]);
		}
		else
		{
			while(true)
			{
				$widgetName=ucwords($this->getInput("Enter Widget Name"));
				if($widgetName!='' && is_dir(WIDGETSDIR.'/'.$widgetName))
				{
					$this->display->error("Widget $widgetName already exists please select another");
					continue;
				}
				if($widgetName=='')
				{
					$this->display->error("Please enter Widget Name");
				}
				else
				{
					break;
				}
			}
				
		}
		$this->display->msg("Creating Widget ".$widgetName);
		$widgetSnippetPath=__DIR__.'/snippets/widget';
		$widgetRelativeDir='Widgets';
		/**
		 * Create Widget Folder
		 */
		mkdir(WIDGETSDIR.'/'.$widgetName);
		$this->display->msg("Creating ".$widgetRelativeDir.'/'.$widgetName.' Folder');
		/**
		 * Create CSS Dir
		 */
		mkdir(WIDGETSDIR.'/'.$widgetName.'/css');
		$this->display->msg("Creating ".$widgetRelativeDir.'/'.$widgetName.'/css'.' Folder');
		/**
		 * Create JS Dir
		 */
		mkdir(WIDGETSDIR.'/'.$widgetName.'/js');
		$this->display->msg("Creating ".$widgetRelativeDir.'/'.$widgetName.'/js'.' Folder');
		/**
		 * Copy CSS File and
		 */
		$cssContent=str_replace('{{WIDGET_NAME}}',$widgetName,file_get_contents($widgetSnippetPath.'/css/default.css.tmpl'));
		file_put_contents(WIDGETSDIR.'/'.$widgetName.'/css/default.css', $cssContent);
		$this->display->msg("Creating File ".$widgetRelativeDir.'/'.$widgetName.'/css/default.css');
		/**
		 * Copy JS Content
		 */
		$JSContent=str_replace('{{WIDGET_NAME}}',$widgetName,file_get_contents($widgetSnippetPath.'/js/custom.js.tmpl'));
		file_put_contents(WIDGETSDIR.'/'.$widgetName.'/js/custom.js', $JSContent);
		$this->display->msg("Creating File ".$widgetRelativeDir.'/'.$widgetName.'/js/custom.js');
		/**
		 * Copy Helper File
		 */
		$helperContent=str_replace('{{WIDGET_NAME}}',$widgetName,file_get_contents($widgetSnippetPath.'/Helper.php.tmpl'));
		file_put_contents(WIDGETSDIR.'/'.$widgetName.'/Helper.php', $helperContent);
		$this->display->msg("Creating File ".$widgetRelativeDir.'/'.$widgetName.'/Helper.php');
		/**
		 * Copy Index File
		 */
		$indexContent=str_replace('{{WIDGET_NAME}}',$widgetName,file_get_contents($widgetSnippetPath.'/index.php.tmpl'));
		file_put_contents(WIDGETSDIR.'/'.$widgetName.'/index.php', $indexContent);
		$this->display->msg("Creating File ".$widgetRelativeDir.'/'.$widgetName.'/index.php');
		$this->display->msg("Widget created ".$widgetName);
	}
	public function module()
	{
		if(isset($this->params[3]))
		{
			$moduleName=ucwords($this->params[count($this->params) -1]);
			if($moduleName!='' && is_dir(MODULESDIR.'/'.$moduleName))
			{
				$this->display->error("Module $moduleName already exists please select another");
				exit(1);
			}
		}
		else
		{
			while(true)
			{
				$moduleName=ucwords($this->getInput("Enter Module Name"));
				if($moduleName!='' && is_dir(MODULESDIR.'/'.$moduleName))
				{
					$this->display->error("Module $moduleName already exists please select another");
					continue;
				}
				if($moduleName=='')
				{
					$this->display->error("Please enter Module Name");
				}
				else
				{
					break;
				}
			}

		}
		$moduleRelativeDir='Modules';
		$moduleBaseDir=MODULESDIR.'/'.$moduleName;
		$widgetSnippetPath=__DIR__.'/snippets/module';
		$replacement=array();
		$replacement['{{MODULE_NAME}}']=$moduleName;
		$replacement['{{module_name}}']=strtolower($moduleName);
		/**
		 * Create Module Folder
		 */
		mkdir($moduleBaseDir);
		$this->display->msg("Creating ".$moduleRelativeDir.'/'.$moduleName.' Folder');
		/**
		 * Create Controllers Folder
		 */
		$controllersDir=$moduleBaseDir.'/'.'Controllers';
		mkdir($controllersDir);
		$this->display->msg("Creating ".$moduleRelativeDir.'/'.$moduleName.'/Controllers'.' Folder');
		/**
		 * Create Models Folder
		 */
		$modelsDir=$moduleBaseDir.'/'.'Models';
		mkdir($modelsDir);
		$this->display->msg("Creating ".$moduleRelativeDir.'/'.$moduleName.'/Models'.' Folder');
		/**
		 * Create Models Folder
		 */
		$viewsDir=$moduleBaseDir.'/'.'Views';
		mkdir($viewsDir);
		$this->display->msg("Creating ".$moduleRelativeDir.'/'.$moduleName.'/Views'.' Folder');
		/**
		 * Create Controller File
		 */
		$controllerSnippet=$widgetSnippetPath.'/Controllers/ModuleController.php.tmpl';
		$controllerPath=$moduleBaseDir.'/Controllers/'.$moduleName.'Controller.php';
		$this->snippets->copy($controllerSnippet,$controllerPath,$replacement);
		/**
		 * Create Model
		 */
		$modelSnippet=$widgetSnippetPath.'/Models/ModuleModel.php.tmpl';
		$modelPath=$moduleBaseDir.'/Models/'.$moduleName.'Model.php';
		$this->snippets->copy($modelSnippet,$modelPath,$replacement);
		/**
		 * Create View
		 */
		$viewSnippet=$widgetSnippetPath.'/Views/index.php.tmpl';
		$viewPath=$moduleBaseDir.'/Views/index.php';
		$this->snippets->copy($viewSnippet,$viewPath,$replacement);
		/**
		 * Create Route
		 */
		$routeSnippet=$widgetSnippetPath.'/Route.php.tmpl';
		$routePath=$moduleBaseDir.'/Route.php';
		$this->snippets->copy($routeSnippet,$routePath,$replacement);
		$this->display->msg("Creating Module ".$moduleName);
	}
}