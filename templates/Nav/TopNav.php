
<?php
if(LNG_CURRENT==LNG_EN){
	$suff = '_en';
} else {
	$suff = '';
}

$nodes = $GLOBALS['FESkinPage']->MenuItems;
	
foreach($nodes as $k=>$node){
	if($node['level']!=2) continue;
	if($node['visible']!=1) continue;
	$classes = array();
	
	if($node['selected']){
			$classes[] = 'selected';
	}
	
	if($css[$node['id']])
		$classes[] = $css[$node['id']];
	

	$classes = empty($classes) ? '' : ' class="'.implode(' ',$classes).'"';
	echo "<td><a{$classes} href=\"{$node['href']}\"{$node['target']}>{$node['value'.$suff]}</a></td>";
	

}
?>
