<div class="menu">
	<div class="parent">
<?php
	if(LNG_CURRENT==LNG_EN){
		$suff = '_en';
	} else {
		$suff = '';
	}
	
	if($GLOBALS['fc']->node['level']==2){
		echo $GLOBALS['fc']->node['value'.$suff];
	} else {
		$getParent = getdb()->getRow("SELECT * FROM categories WHERE id={$GLOBALS['fc']->node['pid']}");
		echo $getParent['value'.$suff];
	}
?>
	</div>
<?php

$MenuItems = $GLOBALS['FESkinPage']->MenuItems;
	
	
	$startLevel = 3;
	$level = $startLevel-1;
	
	foreach ($MenuItems as $i=>$item){
		if($item['visible']!=1) continue;
		if($item['level']<$startLevel) continue;
		if($item['pid']==106 && !isset($_SESSION['student_data'])) continue;
		
		$css = array();
		
		$css[] = "level".$item['level'];
		
		if($item['selected']) $css[] = "selected";
		
		if($item['level']>$level){
			$css[] = "first";
		}
		
		if($item['level']<$MenuItems[$i+1]['level']){
			$css[] = "open";
		}
		
		if($item['level']<$level){
			//for($level; $level>$item['level']; $level--)
			$css[] = "close";
		}
		
		if($item['level']>$MenuItems[$i+1]['level']){
			$css[] = "last";
		}

		$level = $item['level'];
		
		$css = implode(' ', $css);
		echo <<<EOD
<a href="{$item['href']}"{$node['target']} class="$css">{$item['value'.$suff]}</a>
EOD;
	}

if(isset($_SESSION['student_data'])){
	echo <<<EOD
<a class="logout" href='{$ln}/home/?logout=1'>{$translation['logout']}</a>
EOD;
	}
?>

</div>