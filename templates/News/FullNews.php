<?php

$GLOBALS['FESkinPage']->PageTitle[] = $data['title'];
echo <<<EOD
<div class="static">
	<h1>{$data['title']}</h1>
	{$data['body']}
</div>
EOD;

if($data['node']['php_data']['parameters']['add_coments']) {
	echo CComments::renderComments($data['id'],$data['cid'],true);
}

echo <<<EOD
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
EOD;

echo <<<EOD
<div class="fb-comments" id="facebookComment" data-href="https://www.facebook.com/pages/British-School-of-Sofia/169241626457383" data-numposts="10" data-colorscheme="light"></div>
<div class="fb-like" id="facebookLikeShare" data-href="https://www.facebook.com/pages/British-School-of-Sofia/169241626457383?ref=br_tf" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
 
EOD;
?>