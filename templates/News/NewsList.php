
<h1 style="padding-bottom:10px;"><?=LNG_CURRENT==LNG_BG ? $GLOBALS['fc']->node['value'] : $GLOBALS['fc']->node['value_'.LNG_CURRENT]?></h1>
<?php

foreach ($data['data_list'] as $news){

	include(dirname(__FILE__)."/BriefNewsBlock.php");

}


include(dirname(__FILE__)."/../Core/PageBar.php");
?>