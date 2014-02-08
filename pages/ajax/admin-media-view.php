<?php 

include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/settings.class.php');

$view = $setting->mediaView();

echo  $view ;

?>

