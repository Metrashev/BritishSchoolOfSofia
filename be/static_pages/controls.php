<?php

class CStPage {
	function getCategories() {
		
		$db=getdb();
		$rows=$db->getAssoc("select 
		categories.id,categories.level,static_pages.def as def,static_pages.title as st,static_pages.id as spid,concat(categories.id,'_',ifnull(static_pages.id,0)) as bf, categories.value,categories.id as cid
		 from 
		categories left outer join static_pages on categories.id=static_pages.cid 
		order by categories.l,ifnull(def,0) desc, ifnull(static_pages.id,0)");
		$result=array();
		$result[0]='';
		foreach ($rows as $k=>$v) {
			if($v['level']<1)
				continue;
			$result[$k]=str_repeat($space, 2*($v['level']-1)).$v['value'];
			if(intval($v['spid'])>0&&intval($v['def'])==0) {
				$result[$k]=str_repeat($space, 2*$v['level']).$v['st'];
			}
		}
		
		return $result;
	}
}

if(!function_exists("getControls")) {
	function getControls($type='edit') {
		$con=array(
	
	'controls'=>array(
	'categories'=>array(
		'control'=>array("Label"=>"Categories","name"=>"in_data[categories]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"categories","userFunc"=>"","FormatString"=>"",'autoload'=>array("type"=>"user_func",'value'=>array("DataSource"=>array('CStPage',"getCategories"),'addzero'=>array('key'=>0,'value'=>'')))),
		'search_data'=>array("search_name"=>"cid","matchAllValue"=>0,"cond"=>"="),
	),
	'body_bg'=>array(
		'control'=>array("Label"=>"Text bg","name"=>"in_data[body_bg]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"body_bg","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	),
			
	'body_en'=>array(
		'control'=>array("Label"=>"Text en","name"=>"in_data[body_en]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"body_en","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	),
			
	'title_bg'=>array(
		'control'=>array("Label"=>"Title bg","name"=>"in_data[title_bg]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"title_bg","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	),
			
	'title_en'=>array(
		'control'=>array("Label"=>"Title en","name"=>"in_data[title_en]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"title_en","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
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
}
?>