<?php
use Widgets\Hello\Helper;
addCSS($widgetBaseURL.'/css/default.css');
addJS($widgetBaseURL.'/js/custom.js');
?>
<div id="Hello">
	<?php
		echo Helper::welcome(); 
	?>
</div>