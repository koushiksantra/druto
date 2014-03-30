<?php
use Druto\HTML\HTML as HTML;
/**
 * Druto Helper Functions
 */
/**
 * Print Object Array
 */
if ( ! function_exists('p'))
{
	function p($data,$stop=false)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		if($stop)
		{
			exit(0);
		}
		else
		{
			echo '<hr>';
		}

	}
}
/**
 * Load Widget Array
 */
if ( ! function_exists('loadWidget'))
{
	function loadWidget($widget,$data)
	{
		extract($data);
		$widgetBaseDir=realpath(APPDIR).'/'.str_replace('.','/',$widget);
		$widgetBaseURL=BASEURL.'/'.str_replace('.','/',$widget);
		if(!file_exists($widgetBaseDir) || !is_dir($widgetBaseDir))
		{
			throw new Druto\Exceptions\WidgetException("$widget folder $widgetBaseDir not found");
		}
		if(file_exists($widgetBaseDir.'/index.php'))
		{
			$widgetPath=$widgetBaseDir.'/index.php';
		}
		else if($widgetBaseDir.'/index.html')
		{
			$widgetPath=$widgetBaseDir.'/index.html';
		}

		if(!file_exists($widgetPath) || is_dir($widgetPath))
		{
			throw new Druto\Exceptions\WidgetException("$widget file $widgetPath not found");
		}
		include $widgetPath;
	}
}
/**
 * Add CSS
 */
if ( ! function_exists('addCSS'))
{
	function addCSS($css)
	{
		HTML::addCSS($css);
	}
}
/**
 * Add JS
 */
if ( ! function_exists('addJS'))
{
	function addJS($js)
	{
		HTML::addJS($js);
	}
}