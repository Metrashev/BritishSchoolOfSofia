<?php
/* Search Engine Frindly URLS */


class SEUrls {


	static function getUrlPathForCid($cid){
		static $map = null;

		if($map!=null)
			return $map[$cid];

		$db = getdb();
		if(LNG_CURRENT!=DEFAULT_LANGUAGE){
			$map = $db->getAssoc("SELECT id,concat('/".LNG_CURRENT."',path) FROM categories WHERE path<>'' ORDER BY l");
		} else {
			$map = $db->getAssoc("SELECT id,path FROM categories WHERE path<>'' ORDER BY l");
		}
		return $map[$cid];
	}

	static function _MakeSEFriendliURLs($matches)
	{
		static $urlsHash = array();

		if(array_key_exists($matches[0], $urlsHash))
			return $urlsHash[$matches[0]];

		$parsed = parse_url($matches[2]);
		if(!empty($parsed['host']) && ($parsed['host']!=$_SERVER['HTTP_HOST']) ){
			$urlsHash[$matches[2]] = $matches[0];
			return $matches[0];
		}

		$parsed['query'] = str_ireplace('&amp;', '&', $parsed['query']);
		parse_str($parsed['query'], $parsed['query']);

		$cid = $parsed['query']['cid'];

		$newUrl = self::getUrlPathForCid((int)$cid);

		if(empty($newUrl)){
			$urlsHash[$matches[2]] = $matches[0];
			return $matches[0];
		}

		unset($parsed['query']['cid']);
		if(!empty($parsed['query'])){
			$newUrl .= '?'.http_build_query($parsed['query']);
		}

		if(array_key_exists('fragment', $parsed))
			$newUrl .= '#'.$parsed['fragment'];


		$newUrl = $matches[1].'="'.$newUrl.'"';
		$urlsHash[$matches[0]] = $newUrl;

		//echo $matches[2].">>>".$newUrl."<br />";
	  return $newUrl;
	}

	static function RemakeOutput($html){
		return preg_replace_callback(
            "/(href|action)=\"([^\"]*cid=[0-9]+[^\"]*)\"/",
            array(__CLASS__, '_MakeSEFriendliURLs'),
            $html);
	}


	static function MakeCidFromPath(){

	  $siteLngs = $GLOBALS['CONFIG']['SiteLanguages'];
	  //unset($siteLngs[DEFAULT_LANGUAGE]);

	  if($_GET['REQUEST_URI']){
	  	foreach($siteLngs as $lng=>$val){
	  		if(substr($_GET['REQUEST_URI'], 0, 4)=='/'.$lng.'/') {
	  			define(LNG_CURRENT, $lng);
	  			define(LNG_URL_PREFIX, "/".$lng);
	  			$_GET['REQUEST_URI'] = substr($_GET['REQUEST_URI'], 3);
	  			break;
	  		}
	  	}
	  	if(!defined('LNG_CURRENT')){
	  		define(LNG_CURRENT, DEFAULT_LANGUAGE);
	  		define(LNG_URL_PREFIX, '');
	  	}

	  	$db = getdb();
		$_GET[FrontControler::CIDVarName] = $db->getOne("SELECT id FROM categories WHERE path=?", array($_GET['REQUEST_URI']));
		if($_GET[FrontControler::CIDVarName]==0) throw new EPageNotFound();
	  }
	  else{
	  	define(LNG_CURRENT, DEFAULT_LANGUAGE);
	  	define(LNG_URL_PREFIX, '');
	  }
	}
}



?>