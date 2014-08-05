<?php
function getclassesControls($type='edit') {
	$teachers = array(''=>'');
	$teachers += getdb()->getAssoc("SELECT id, name FROM teachers ORDER BY name DESC");
	$sizes=array(
			'pic'=>array(0,0,"size=0x0"),
	);
	$con=array(

'controls'=>array(
'class_type'=>array(
	'control'=>array("Label"=>"Class type","name"=>"in_data[class_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['class_type']))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"classes.class_type","matchAllValue"=>"0","cond"=>"="    ),
),

'paralelka'=>array(
	'control'=>array("Label"=>"Paralelka","name"=>"in_data[paralelka]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"paralelka","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['paralelki']))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"classes.paralelka","matchAllValue"=>"0","cond"=>"="    ),
),

'photo'=>array(
	'control'=>array("Label"=>"Photo","name"=>"in_data[photo]","isHTML"=>false,"tagName"=>"ManagedImage","bound_field"=>"photo","userFunc"=>"","FormatString"=>"","parameters"=>array("table"=>"classes","field"=>"photo","id"=>$_GET['id'],"dir"=>$GLOBALS['MANAGED_FILE_DIR'],"view_dir"=>$GLOBALS['MANAGED_FILE_DIR_IMG'],'resize'=>true,'overwrite'=>false,
'sizes'=>$sizes
)),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
),

'main_teacher'=>array(
	'control'=>array("Label"=>"Main teacher","name"=>"in_data[main_teacher]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"main_teacher","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$teachers))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"classes.main_teacher","matchAllValue"=>"","cond"=>"="    ),
),
)
);

if($type=='search') {
    	$con['template']=array('dir'=>dirname(__FILE__).'/search.tpl');
    }
else {
	$con['template']=array('dir'=>dirname(__FILE__).'/edit.tpl');
}
    return $con;
}

?>