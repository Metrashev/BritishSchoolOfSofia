<?php
define('ITTI_VERSION', '1');
define('ITTI_VERSION_MIN', '3');

define('DATE_FORMAT','%d.%m.%Y');
define('TIME_FORMAT','%H:%M:%S');

define('LNG_BG','bg');
define('LNG_EN','en');

define('DEFAULT_LANGUAGE','bg');

define('USE_OWN_USERS', true);
define('USE_AUDIT_LOG', false);
define('GALLERIES_ENABLED', true);
define('MEMBERS_ENABLED', false);
define('COMMENTS_ENABLED', false);
define('MQ_ENABLED', false);
define('ATTRIBUTES_ENABLED', false);
define('POLLS_ENABLED', false);
define('ADVERTS_ENABLED', false);
define('PRODUCTS_ENABLED', false);
define('FLASH_UPLOAD_ENABLED', true);

include(dirname(__FILE__)."/dir_config.php");


define('DEBUG_MODE', strpos($_SERVER['HTTP_HOST'], 'itti.bg')>0);

if(DEBUG_MODE){
	$CONFIG['DSN']="mysql://root:kustendil@localhost/bss";
	$CONFIG['EL_NL_DSN']="mysql://root:kustendil@localhost/euroliceumnewsletter";
	$CONFIG['EL_NL_SITE']="http://euroliceumnewsletter.itti.bg";
} else {
	$CONFIG['DSN']="mysql://template1:template1@localhost/nodb";
	$CONFIG['EL_NL_DSN']="mysql://eurolice_web:web@localhost/eurolice_newsletter";
	$CONFIG['EL_NL_SITE']="http://newsletter.euroliceum.eu";
}

$CONFIG['NAMES_CHARACTERS_SET']='UTF8';
$CONFIG['SITE_CHARSET']='UTF-8';
mb_internal_encoding($CONFIG['SITE_CHARSET']);

$CONFIG['ApplicationState']= DEBUG_MODE ? 'Debug' : '';
$CONFIG['ErrorLevel'] = E_ALL & !E_NOTICE;



$CONFIG['SiteLanguages'] = array(LNG_BG=>'Bulgarian', LNG_EN=>'English');

$CONFIG['DefautlCID'] = 2;

$CONFIG["login_cid_bg"]=48;
$CONFIG["login_cid_en"]=48;


$CONFIG['Skins'] = array();
$CONFIG['Skins'][1] = array('name'=>'Main', 'file'=>'templates/Core/template.php');
$CONFIG['Skins'][2] = array('name'=>'BKG', 'file'=>'templates/Core/template_bkg.php');
$CONFIG['Skins'][3] = array('name'=>'BSS', 'file'=>'templates/Core/template_bss.php');
$CONFIG['Skins'][4] = array('name'=>'BCS', 'file'=>'templates/Core/template_bcs.php');


$CONFIG['PrintSkin'] = 'templates/Core/printSkin.php';
$CONFIG['Error404Skin'] = 'Error404.php';


$CONFIG['FEPageTypes'] = array();
$CONFIG['FEPageTypes'][1] = array('name'=>'Static Page', 'class'=>'CFEStaticPage');
$CONFIG['FEPageTypes'][2] = array('name'=>'News', 'class'=>'CFENewsPage');
$CONFIG['FEPageTypes'][3] = array('name'=>'Redirection', 'class'=>'CFERedirectPage');
if(GALLERIES_ENABLED) $CONFIG['FEPageTypes'][4] = array('name'=>'Gallery', 'class'=>'CFEGallery');

$CONFIG['FEPageTypes'][255] = array('name'=>'Custom Page', 'class'=>'CFECustomPage');

define("PRODUCT_TEMPLATE_TYPE",5);

/*
[Template ID][] //Template ID - 0 e za vsichki templeiti

*/
$CONFIG['CFERedirectPage']['be']['tree'][0][] = BE_DIR.'categories/Custom/redirect.php';

$CONFIG['CFENewsPage']['be']['tree'][0][] = BE_DIR.'categories/Custom/news.php';
if(COMMENTS_ENABLED)	$CONFIG['CFENewsPage']['be']['tree'][0][] = BE_DIR.'categories/Custom/comments.php';
if(GALLERIES_ENABLED)	$CONFIG['CFENewsPage']['be']['tree'][0][] = BE_DIR.'categories/Custom/add_gallery.php';
if(COMMENTS_ENABLED)	$CONFIG['CFEStaticPage']['be']['tree'][0][] = BE_DIR.'categories/Custom/comments.php';
if(GALLERIES_ENABLED)	$CONFIG['CFEStaticPage']['be']['tree'][0][] = BE_DIR.'categories/Custom/add_gallery.php';
if(GALLERIES_ENABLED)	$CONFIG['CFEGallery']['be']['tree'][0][] = BE_DIR.'categories/Custom/gallery.php';


$CONFIG['CFEStaticPage']['be']['menu'] = BE_DIR.'static_pages/edit.php?loadDef=1&amp;n_cid=';
$CONFIG['CFENewsPage']['be']['menu'] = BE_DIR.'news_pages/?loadDef=1&amp;cid=';
$CONFIG['CFEGallery']['be']['menu'] = BE_DIR.'gallery/?cid=';


$CONFIG['CFEStaticPage']['templates'][1] = array('name'=>'Main', 'file'=>'templates/Core/StaticPage.php');
$CONFIG['CFENewsPage']['templates'][1] = array('name'=>'Main', 'fileList'=>'templates/News/NewsList.php', 'fileFull'=>'templates/News/FullNews.php');
$CONFIG['CFEGallery']['templates'][1] = array('name'=>'Gallery', 'file'=>'templates/Gallery/gallery.php');
//$CONFIG['CFEGallery']['templates'][2] = array('name'=>'Paged', 'file'=>'templates/Gallery/gallery2.php', 'ItemsPerPage'=>18);
$CONFIG['CFEGallery']['templates'][3] = array('name'=>'Gallery3', 'file'=>'templates/Gallery/gallery3.php');
$CONFIG['CFEGallery']['templates'][4] = array('name'=>'Gallery4', 'file'=>'templates/Gallery/gallery4.php');



$CONFIG['CFECustomPage']['templates'][1] = array('name'=>'Home Page', 'file'=>'templates/Core/HomePage.php');
$CONFIG['CFECustomPage']['templates'][7] = array('name'=>'Home Page BKG', 'file'=>'templates/Core/HomePage_bkg.php');
if(POLLS_ENABLED) $CONFIG['CFECustomPage']['templates'][2] = array('name'=>'Poll Archive', 'file'=>'templates/Poll/archive.php');
$CONFIG['CFECustomPage']['templates'][3] = array('name'=>'Members - Login', 'file'=>'templates/Members/Login.php');
$CONFIG['CFECustomPage']['templates'][4] = array('name'=>'Members - Register', 'file'=>'templates/Members/Register.php');
$CONFIG['CFECustomPage']['templates'][5] = array('name'=>'Forgotten password', 'file'=>'templates/Members/ForgotenPass.php');
$CONFIG['CFECustomPage']['templates'][6] = array('name'=>'Admission form', 'file'=>'templates/formprocessor/index.php');
$CONFIG['CFECustomPage']['templates'][8] = array('name'=>'Contact form', 'file'=>'templates/Core/custom/message_form.php');
$CONFIG['CFECustomPage']['templates'][9] = array('name'=>'Summer school admission', 'file'=>'templates/formprocessor/summer_form_index.php');
$CONFIG['CFECustomPage']['templates'][10] = array('name'=>'Parent menu', 'file'=>'templates/Core/custom/Parents.php');
$CONFIG['CFECustomPage']['templates'][11] = array('name'=>'Teachers', 'file'=>'templates/Core/custom/Teachers.php');
$CONFIG['CFECustomPage']['templates'][12] = array('name'=>'Subjects', 'file'=>'templates/Core/custom/Subjects.php');
$CONFIG['CFECustomPage']['templates'][13] = array('name'=>'Program', 'file'=>'templates/Core/custom/Program.php');
$CONFIG['CFECustomPage']['templates'][14] = array('name'=>'Calendar', 'file'=>'templates/Core/custom/Calendar.php');
$CONFIG['CFECustomPage']['templates'][15] = array('name'=>'Upcoming', 'file'=>'templates/Core/custom/upcoming_events.php');
$CONFIG['CFECustomPage']['templates'][16] = array('name'=>'Past', 'file'=>'templates/Core/custom/past_events.php');
$CONFIG['CFECustomPage']['templates'][17] = array('name'=>'Teaching Staff', 'file'=>'templates/Core/custom/Teachers_all.php');
$CONFIG['CFECustomPage']['templates'][18] = array('name'=>'Parents guide', 'file'=>'templates/Core/custom/Parents_guide.php');
/*
$CONFIG['CFECustomPage']['templates'][2] = array('name'=>'Gallery', 'file'=>'templates/Gallery/gallery.php');
$CONFIG['CFECustomPage']['be']['menu'][2] = BE_DIR.'gallery/?cid=_#CID#_';
$CONFIG['CFECustomPage']['be']['tree'][2] = BE_DIR.'categories/Custom/gallery.php';
*/




$CONFIG['CFEStaticPage']['be']['delete'] = array('file'=>BE_DIR.'categories/del_functions.php','functions'=>array('getMessage'=>array('sp_class','getMessage'),'process_delete'=>array('sp_class','processDelete')));
$CONFIG['CFENewsPage']['be']['delete'] = array('file'=>BE_DIR.'categories/del_functions.php','functions'=>array('getMessage'=>array('news_class','getMessage'),'process_delete'=>array('news_class','processDelete')));


$CONFIG['AutoLoad']=array(

	'CBONews'=>'lib/fe/news.php',
	'CFENewsPage'=>'lib/fe/news.php',
	'CFEGallery'=>'lib/fe/CFEGallery.php',
	'CBOGallery'=>'lib/fe/CFEGallery.php',
	'CComments'=>'lib/fe/CComments.php',
	'CMembers'=>'lib/fe/CMembers.php',

);


$GLOBALS['CONFIG']=$CONFIG;


$GLOBALS['ADVERT_POSITIONS']=array(0=>'',1=>'Център',2=>'Лява колона 1',3=>'Лява колона 2',4=>'Дясна колона 1',5=>'Дясна колона 2');


$GLOBALS['AdsPositionsSize'] = array(
	1=>array(100,100),
);

$GLOBALS['AdsTypes']=array(
	1=>"Image",
	2=>"Flash",
	3=>"Text",
);

$GLOBALS['MANAGED_FILE_DIR']=dirname(__FILE__)."/../files/mf/";
$GLOBALS['MANAGED_FILE_DIR_IMG']="/files/mf/";


/* Just for BE  */
$GLOBALS['YES_NO']=array(
		0=>"NO",
		1=>"YES"
);

$GLOBALS['VALID_IMAGE_EXTENSIONS']=array(
	'.jpg',
	'.png',
	'.gif',
);

$GLOBALS['VALID_VIDEO_EXTENSIONS']=array(
	'.avi',
	'.mpeg',
	'.flv',
);

$GLOBALS['FFMPEG_FILE'] = '/usr/local/bin/ffmpeg';


define('JS_VALIDATION',true);
define('JS_ERROR_COLOR','#FFDBA6');

define("RIGHTS_DELETE",1);
define("RIGHTS_INSERT",2);
define("RIGHTS_UPDATE",4);
define("RIGHTS_READ",8);

$GLOBALS['mq_mail_status_array']=array(
	0=>"Waiting",
	1=>"Sending started",
	2=>"Sending ended",
	3=>"Sending interupted",
	4=>"Error from function mail()",
);

$GLOBALS['user_status_array']=array(
	1=>"Admin",
	2=>"Employee",
);

define("OPERATION_ADD",1);
define("OPERATION_UPDATE",2);
define("OPERATION_DELETE",3);
define("OPERATION_EXCEL",4);

$GLOBALS['operation_array']=array(
	OPERATION_ADD=>"Record Created",
	OPERATION_UPDATE=>"Record Updated",
	OPERATION_DELETE=>"Record Deleted",
	OPERATION_EXCEL=>"Change of EXCEL data",
);

$GLOBALS['class_type'] = array(
		0=>'',
		1=>'KG Nursery 1', 
		2=>'KG Nursery 2',
		3=>'Reception',
		4=>'Grade 1', 
		5=>'Grade 2',
		6=>'Grade 3', 
		7=>'Grade 4',
		8=>'Grade 5',
		9=>'Grade 6',
		10=>'Grade 7',
		11=>'Grade 8',
		12=>'GCSE 1',
		13=>'GCSE 2',
		14=>'AL 1',
		15=>'AL 2',
);

$GLOBALS['paralelki'] = array(
	0=>'',
	1=>'A',
	2=>'B',
	3=>'C',
	4=>'D',
	5=>'E',			
);

$GLOBALS['class_length'] = array(
		'nursery'=> array(
			1=>'08:45 - 09:15',
			2=>'09:15 - 9:45',
			3=>'10:15 - 10:45',
			4=>'10:45 - 11:15',
			5=>'11:45 - 12:15',
			6=>'12:15 - 12:45',
			7=>'',
			8=>'',
			9=>'',
			10=>'',
		),
		
		'grades'=> array(
			1=>'08:30 - 09:10',
			2=>'09:10 - 09:50',
			3=>'10:10 - 10:50',
			4=>'10:50 - 11:30',
			5=>'11:45 - 12:25',
			6=>'12:25 - 13:05',
			7=>'14:00 - 14:40',
			8=>'14:45 - 15:25',
			9=>'15:30 - 16:30',
			10=>'16:30 - 17:30',
		),
);

$GLOBALS['class_breaks'] = array(
	'nursery'=> array(
		3=>'9:45 - 10:15',
		5=>'11:15 - 11:45',
		7=>'13:05 - 14:00',
		8=>'14:40 - 14:45',
		9=>'15:25 - 15:30',
	),
	'grades'=> array(
		3=>'9:50 - 10:10',
		5=>'11:30 - 11:45',
		7=>'13:05 - 14:00',
		8=>'14:40 - 14:45',
		9=>'15:25 - 15:30',				
	),		
);

$GLOBALS['calendar_months'] = array(1=>'January','February','March','April','May','June','July','August','September','October','November','December');

$GLOBALS['calendar_categories'] = array(
	''=>'',
	1=>'За родители',
	2=>'Общи занимания',
	3=>'Занимания по избор',
	4=>'Ваканция',		
);

$GLOBALS['event_category'] = array(
		1=>"British School",
		2=>"British Kindergarten",
		3=>"British College",
		4=>"Common",
);

$GLOBALS['category_type'] = array(
		1=>"British Kindergarten",
		2=>"British School",
		3=>"British College",
);

$GLOBALS['professions'] = array(
		'bg'=>array('Дипломатически мисии','Държавна администрация','Енергетика','Здравеопазване и фармация','Информационни технологии','Медии','Образование и наука','Право','Производство','Свободни професии','Селско стопанство','Стоителство и недвижими имоти','Транспорт','Търговия','Услуги','Финанси'),
		'en'=>array('Diplomatic Missions','Government administration','Energy and Utilities','Healthcare and pharmacy','Information Technologies','Media','Education & Science','Law','Manufacture','Free professions','Agronomy and farming','Building Construction & Real-estate','Transport','Retail / Wholesale','Services','Finance'),
);

$GLOBALS['educational_systems'] = array(
		'bg'=>array('Британска','Международна','Американска','Българска','Френска','Испанска','Европейска','Друга'),
		'en'=>array('British curriculum','International curriculum','American curriculum','Bulgarian curriculum','French curriculum','Spanish curriculum','European curriculum','Other curriculum'),
);

$GLOBALS['form_lang'] = array(''=>'',0=>'Sent from BG', 1=>'Sent form EN');

$GLOBALS['payment_status'] = array(''=>'',0=>'No tax defined', 1=>'Not payed', 2=>'Payed');
$GLOBALS['payment_method'] = array(0=>'',1=>'I Payment', 2=>'II Payments', 3=>'III Payments');

$GLOBALS['msg_topic'] = array(
		'bg'=>array(
			''=>'',
			0=>'Оплакване',
			1=>'Предложение',
			2=>'Препоръка',
		),
		'en'=>array(
			''=>'',
			0=>'Compliance',
			1=>'Suggestion',
			2=>'Recommendation',
		),
);
$GLOBALS['msg_topic_be'] = array(
				''=>'',
				0=>'Оплакване',
				1=>'Предложение',
				2=>'Препоръка',
);

$GLOBALS['student_status'] = array(
	''=>'',
	0=>'Неприет',
	1=>'За презаписване',
	2=>'Приет',
	3=>'Отписан',
	4=>'Отказан',		
);

$GLOBALS['answer_status'] = array(''=>'', 0=>'Unanswered', 1=>'Answered');

$GLOBALS['transport_status'] = array(''=>'', 0=>'No', 1=>'Yes');
$GLOBALS['yes_no'] = array(''=>'',0=>'Не', 1=>'Да');
$GLOBALS['eyes'] = array(''=>'', 0=>'Нормално', 1=>'Очила');
$GLOBALS['ears'] = array(''=>'', 0=>'Нормално', 1=>'Абнормално');
$GLOBALS['summer_status'] = array(''=>'',0=>'неприет', 1=>'приет');
$GLOBALS['customCids'] = array(
	'bg'=>array(
	),
	'en'=>array(
	),
);


include(dirname(__FILE__)."/resources.php");
?>
