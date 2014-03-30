<?php 
use Widgets\Hello\Helper;
addCSS($widgetBaseURL.'/css/default.css');
addJS($widgetBaseURL.'/js/custom.js');
?>
<div id="hello">
<?php 
echo "Hello Widget";
echo "Display All images from $imageDir".Helper::test();
?>
</div>