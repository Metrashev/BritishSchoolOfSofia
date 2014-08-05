jQuery(document).ready(function($) {
	$('<div id="cid_search_box" style="margin:5px 0; padding:5px 0;">Search:&nbsp;<input type="text" id="search_ctrl" value="" tabindex="1" style="width:200px;"/>&nbsp;<input type="submit" id="search_ctrl_btn" value="Search" tabindex="2" style="cursor:pointer;"/>&nbsp;<br />Резултати: <div id="cid_search_results" style="max-width:400px; max-height:200px; overflow:auto; padding:3px 0;"></div></div>').insertAfter('select#node');

	$('select#node option').dblclick(function(e){
		$('input[name="submitupdate"]').click();
	});

	$('input#search_ctrl_btn').click(function(e){
		e.preventDefault();
		var results = [];
		var val = $('input#search_ctrl').val().toLowerCase();

		if(val) {
			var is_nan = isNaN(parseInt(val));
			$('select#node').find('option').css({'background':'','color':''}).removeAttr('selected').each(function(indx) {
				if($(this).attr('value')==val || (is_nan && $(this).text().toLowerCase().indexOf(val)!=-1)) {
					$(this).css({'background':'#EE0000','color':'#fff'}).attr('selected','selected');
					results[results.length] = (results.length+1) + ". <a style='cursor:pointer; font-weight:normal; font-size:11px; color:#E00001;' onclick=\"$('select#node option').removeAttr('selected').eq("+indx+").attr('selected','selected')\">"+$(this).text().trim()+"</a>";
				}
			});
			results = results.length>0 ? results.join('<br />') : '<span style="font-size:11px; color:#E00001;">Няма съвпадения!!!</span>';
		}
		else{
			results = '<span style="font-size:11px; color:#E00001;">Полето за търсене е празно!</span>';
		}
		$('div#cid_search_results').html(results);

		return false;
	});
});