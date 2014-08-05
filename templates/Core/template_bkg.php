<?php
$translation = array(
	'bg'=>array(
		'back'=>'Назад',
		'print'=>'Печат',
		'top'=>'Нагоре',
		'home'=>'Начало',
		'contacts'=>'Контакти',
		'teachers'=>'Учители',
		'relations'=>'Връзки',
		'rights'=>'Всички права запазени.',
		'logout'=>'Изход',
		'hello'=>'Здравейте, ',
	),
	'en'=>array(
		'back'=>'Back',
		'print'=>'Print',
		'top'=>'Top',
		'home'=>'Home',
		'contacts'=>'Contacts',
		'teachers'=>'Teachers',
		'relations'=>'Relations',
		'rights'=>'All rights reserved.',
		'logout'=>'Logout',
		'hello'=>'Hello, ',
	),
);
$translation = $translation[LNG_CURRENT];
$customCids = $GLOBALS['customCids'][LNG_CURRENT];
if(LNG_CURRENT==LNG_EN){
	$suff = '_en';
	$ln = '/en';
} else {
	$suff = '';
	$ln = '';
}
$db = getdb();
$printA = $data['HidePrintLink'] ? '' : " | <a href='{$data['PrintLinkHref']}' class='Print' target='_blank' onClick='this.href = getPrintLink();'>{$translation['print']}</a>";
$backPrintTop = <<<EOD
<div class="BackPrintTop">
<a href="{$data['BackLinkHref']}" class="Back">{$translation['back']}</a> | <a href="#" class="Top">{$translation['top']}</a> {$printA}
</div>
EOD;

?>
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LNG_CURRENT?>" lang="<?=LNG_CURRENT?>">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<title><?php echo $data['PageTitle'];?></title>
	<?php echo  $data['Header'] ?>
	<link rel="stylesheet" type="text/css"  href="<?=CSS_DIR;?>lib.css" />
	<script language="JavaScript" type="text/javascript" src="<?=JS_DIR;?>swfobject.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?=JS_DIR;?>lib.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?=JS_DIR;?>jquery-1.10.1.min.js"></script>
</head>

<body style="background:#1681F9 url('/i/bkg/wrap_bgr_bkg.png') no-repeat 50% 90px;">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrap">

	<div id="header">
		<a href="/<?=LNG_CURRENT==LNG_BG ? 'bg' : 'en'?>/home/"><img src="/i/bss_logo.png" style="float:left;"/></a>
		<img src="/i/bkg/bkg_slogan.png" style="padding:45px 0 0 30px;"/>
<?php 
// if(isset($_SESSION['student_data'])){
// 	echo <<<EOD
// 		<table cellspacing="0" cellpadding="0" class="user">
// 			<tr>
// 				<td style="padding-right:7px; border-right:1px dotted #ADB0B8;">{$translation['hello']}{$_SESSION['student_data']['parent']}</td>
// 				<td style="padding-left:8px;">
// 					<a href='{$ln}/home/?logout=1'>{$translation['logout']}</a>
// 				</td>	
// 			</tr>		
// 		</table>
// EOD;
// }
?>
		<table cellspacing="0" cellpadding="0" class="homeNav">
			<tr>
				<td><img src="/i/telephone.png"/></td>
				<td style="border-right:1px dotted #BDC0C6; padding-right: 10px"><a href="/<?=LNG_CURRENT?>/home/" ><?=$translation['home']?></a></td>
				<td><a href="/<?=LNG_CURRENT?>/contacts/" ><?=$translation['contacts']?></a></td>
				<td><a href="/<?=LNG_CURRENT==LNG_BG ? 'en/bkg/presentation/' : 'bg/bkg/presentation/'?>" style="background: url('/i/<?=LNG_CURRENT==LNG_BG ? 'en' : 'bg';?>_btn.png') no-repeat 50% 0; display:inline-block; width:34px; height:34px;"></a></td>
			</tr>
		</table>
		<div class="topNav">
		<?php 
		$topMenu=array(
			113=>array(
				'alt'=>'e-Newsletter',
				'src'=>'h_enews.png',
				'src_d'=>'h_enews_d.png',
			),
			19=>array(
				'alt'=>'Apply Online',
				'src'=>'h_apply.png',
				'src_d'=>'h_apply_d.png',
			),
			106=>array(
				'alt'=>'Parents',
				'src'=>'h_parents.png',
				'src_d'=>'h_parents_d.png',
			),
		);

	foreach ($topMenu as $key=>$value) {
		$cssTopMenu = $currentCid == $key ? "class='selected'" : "";
		echo <<<EOD
		<div {$cssTopMenu}><a href="/?cid={$key}"><img alt="{$value['alt']}" src="/i/{$value['src']}" class="currentImage"/><img alt="{$value['alt']}" src="/i/{$value['src_d']}" class="hoverImage"/></a></div>
EOD;
}
		?>
		</div>
		<table cellpadding="0" cellspacing="0" border="0" class="menu bkg">
			<tr>
			<?php include(dirname(__FILE__).'/../Nav/TopNav.php'); ?>
			</tr>
		</table>
	</div>

	<table cellpadding="0" cellspacing="0" id="wrapTable">
		<tr>
<?php 
	echo <<<EOD
		<td colspan="3"><img src="/i/bkg/header_inner_bkg.png" /></td>
		</tr><tr>
EOD;
	echo "<td id='left-nav' width='241'>";
	include(dirname(__FILE__).'/../Nav/LeftNav.php');
	echo <<<EOD
		<a class="schoolImage" href="/bss/presentation/"><img  class="currentImage" src="/i/bss_left.png" style="margin-bottom:20px;"/><img class="hoverImage" src="/i/bss_left_o.png" style="margin-bottom:20px;"/></a>
		<a class="schoolImage" href="/bcs/presentation/"><img class="currentImage" src="/i/bcs_left.png" style="margin-bottom:20px;"/><img class="hoverImage" src="/i/bcs_left_o.png" style="margin-bottom:20px;"/></a>
EOD;
	echo "</td>";
	
	echo "<td id='content' width='540' style='padding-left:24px;'>".$data['body']."</td>";
		
	echo "<td id='ctx' width='330'>";
	echo <<<EOD
	
EOD;
	include(dirname(__FILE__).'/../Nav/ctxNav.php');
	echo "</td>";

?>	
		</tr>
	</table>


	<div id="footer">
		<div class="bpt"><?=$backPrintTop?></div>
		<div class="relations">
			<h2><?=$translation['relations']?></h2>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="http://www.cie.org.uk/programmes-and-qualifications/cambridge-primary/cambridge-primary/" target="_blank"><img src="/i/cambridgeLogo.png" /></a></td>
					<td style="padding: 0 30px;"><a href="http://www.cobis.org.uk/page.cfm?p=486&start=1" target="_blank"><img src="/i/cobisLogo.png" /></a></td>
					<td><a href="http://www.britishcouncil.org/bulgaria-learn-english-kids-website.htm" target="_blank"><img src="/i/britishCouncilLogo.png" /></a></td>
				</tr>
			</table>
		</div>
		
		<table cellspacing="0" cellpadding="0" class="footerNav">
			<tr>
				<td width="14%" class="menus">
					<a href="https://classis.co.uk/eurolyceum/class/index.php" target="_blank"><?=$translation['teachers']?></a>
					<a href="/?cid=2" ><?=$translation['home']?></a>
					<a href="/?cid=10" ><?=$translation['contacts']?></a>
				</td>
				<td width="24%" class="menus">
<?php
	$pid = 36;
	$cnt = 0;
	$getLinks = $db->getAll("SELECT * FROM categories WHERE level=2 AND visible=1 AND pid={$pid} ORDER BY l ASC");
	foreach($getLinks as $k=>$v){
		if($cnt==3){
			echo "</td><td width='22%' class='menus'>";
			$cnt = 0;
		}
		
		if($_GET['cid']==$v['id']){
			$selected = ' selected';
		} else {
			$selected = '';
		}
		
		echo "<a href='/?cid=".$v['id']."' class='".$selected."'>".$v['value'.$suff]."</a>";
		$cnt++;
	}
?>
				</td>
				<td width="40%" style="text-align:center;">
					<img src="/i/bssFooterLogo.png" />
<?php
	$contacts = LNG_CURRENT==LNG_BG ? '29' : '30';
	$getContacts = $db->getRow("SELECT * FROM static_pages WHERE cid={$contacts}");
?>
					<div class="footerContacts"><?=$getContacts['body_'.LNG_CURRENT]?></div>
				</td>
			</tr>
		</table>
		
		<div class="footerBottom">
			<p class="rights">© 2014 British Schools in Bulgaria. <?=$translation['rights']?></p>
			<a href="http://www.StudioITTI.com/" target="_blank" ><img src="/i/itti.gif" /></a>
		</div>
		
	</div>

</div>
<?=$data['TrackerCode']?>
</body>
</html>