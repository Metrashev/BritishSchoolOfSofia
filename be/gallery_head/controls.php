<?php
function getgallery_headControls($type='edit') {
	
	$num_sizes=2;
	
	$con=array(

'controls'=>array(
'name'=>array(
	'control'=>array("Label"=>"Име","name"=>"in_data[name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>true,),
	'search_data'=>array("search_name"=>"gallery_head.name","matchAllValue"=>"","cond"=>"like"    ),
),
)
);

$fields=array("size"=>DATA_VARCHAR,"width"=>DATA_INT,"height"=>DATA_INT);
for($i=1;$i<=$num_sizes;$i++) {
	$required=$i==1;
	foreach ($fields as $fn=>$f_type) {
		$con['controls'][$fn.'_'.$i]=array(
			'control'=>array("Label"=>"{$fn} {$i}","name"=>"params[$i][{$fn}]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"{$fn}_{$i}","userFunc"=>"","FormatString"=>""),
			'write_data'=>array("type"=>$f_type,"required"=>$required,)
		);
	}
}


if($type=='search') {
    	$con['template']=array('dir'=>dirname(__FILE__).'/search.tpl');
    }
else {
	$con['template']=array('dir'=>dirname(__FILE__).'/edit.tpl');
}
    return $con;
}

?>